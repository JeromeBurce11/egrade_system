<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('registration/{$id}','UserController@register');
// Route::get('login','UserController@login');
Route::get('/welcome/{id?}','UserController@welcome')->name('welcome');
Route::get('/student','StudentController@create');
Route::any('/student/create','StudentController@insert')->name('student/create');

Route::get('/student/edit/{id}','StudentController@edit')->name('student/edit');
Route::post('/student/update/{id}','StudentController@update')->name('student/update');
Route::get('delete/{id}','StudentController@delete');
// Route::any('/student',function () {
//     return 'test';
// });




