<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Human;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');//
    }
    public function insert(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric|min:1',
            'gender' => 'required',
            'address' => 'required'
        ]);
        
        $data = request()->except(['_token']);
        DB::table('humans')->insert($data);
       // echo $data;
        echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
        return redirect()->to('/welcome');
        // return 'test';
    }
  

    public function edit($id)
    {
        $human = Human::find($id);
        return view('student.edit',compact('human'));
    }

   
    public function update(Request $request,$id) {
        
        $request -> validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required'
            ]);
            
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');
     
        DB::update('update humans set first_name = ?,middle_name=?,last_name=?,email=?,age=?,gender=?,address=? where id = ?',[$first_name,$middle_name,$last_name,$email,$age,$gender,$address,$id]);
        echo "Record updated successfully.";
        return redirect()->to('/welcome');
        }

   
    // public function destroy($id) {  
    //     $human = Humans::find($id);
    //     $human->delete();


    //     // DB::delete('delete from humans where id = ?',[$id]);
    //     echo "Record deleted successfully.";
    //     return redirect('/welcome')->with('success','Deleted successfully.');
    // }
    public function delete($id){
        DB::table('humans')->where('id',$id)->delete();
        return redirect('/welcome');
        
        }
}   
