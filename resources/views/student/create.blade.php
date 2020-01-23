@extends('student.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
<div class="row">
    <div class="col-md-12">
        <br/>
        <a href = "{{url('/welcome')}}" class="btn btn-primary ">View List</a><br>
        <div class="card text-#27c5f5 mb-3" style="color:#27c5f5;max-width: 30rem;">
            <div class="card-header"><h1>Add Student</h1></div>
            <div class="card-body">
                <form method="post" action="{{route('student/create')}}">
                    @csrf
                    <!-- value="{{old('first_name')}}" -->
                    <div class="form-group">
                        <label for="">Firstname:</label>
                        <input type="text" name="first_name"
                    class="form-control" placeholder="Enter First Name"/>
                    <span class="error">
                        @if($errors->has('first_name'))
                            {{$errors->first('first_name')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="">Middlename:</label>
                        <input type="text" name="middle_name"
                    class="form-control" placeholder="Enter Middle Initial" />
                    <span class="error">
                        @if($errors->has('middle_name'))
                            {{$errors->first('middle_name')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="">Lastname:</label>
                        <input type="text" name="last_name"
                    class="form-control" placeholder="Enter Last Name" value="{{old('last_name')}}"/>
                    <span class="error">
                        @if($errors->has('last_name'))
                            {{$errors->first('last_name')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                    <label for="">Email:</label>
                        <input type="email" name="email"
                    class="form-control" placeholder="Enter Email" value="{{old('email')}}"/>
                    <span class="error">
                        @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                    <label for="">Age:</label>
                        <input type="number" name="age"
                    class="form-control" placeholder="Enter age" value="{{old('age')}}"/>
                    </div>
                    <span class="error">
                        @if($errors->has('age'))
                            {{$errors->first('age')}}
                        @endif
                    </span>

                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }}> Male
                        <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}> Female
                        <br>
                        <span class="error">
                        @if($errors->has('gender'))
                            {{$errors->first('gender')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                    <label for="">Address:</label>

                        <input type="text" name="address"
                    class="form-control" placeholder="Enter address"  value="{{old('address')}}"/>
                    </div>
                    <span class="error">
                        @if($errors->has('address'))
                            {{$errors->first('address')}}
                        @endif
                    </span>
                    <div class="form-group">
                        <input type="submit" 
                    class="btn btn-Primary" />
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>
</center>
@endsection