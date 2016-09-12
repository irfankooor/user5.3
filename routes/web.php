<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => ['web']], function(){
//halaman awal
Route::get('/', function () {
    return view('welcome');
});
//registrasi,login,ressetpassword=copas-distorage-log
Auth::routes();
//logout
Route::get('logout', function(){
  Auth::logout();
  return view('welcome');
});
//home setelah login
Route::get('/home', 'HomeController@index');
//read data
Route::get('list', [
  'uses' => 'UserController@show',
  'as' => 'date'
]);
//show profil
Route::get('profil', function () {
    return view('profil');
});
//edit data
Route::get('/edit/{id}', [
  'uses' => 'UserController@edit',
  'as' => 'edit'
]);
//update data
Route::patch('/update/{id}', [
  'uses' => 'UserController@update',
  'as' => 'update'
]);
//hapus data
Route::delete('/delete/{id}', [
  'uses' => 'UserController@destroy',
  'as' => 'delete']);
});
