<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Rutas de Ad
Route::get('/permission/all','AdController@index');
Route::get('/permission/{id}','AdController@show');

//Rutas de Category
Route::get('/permission/all','CategoryController@index');
Route::get('/permission/{id}','CategoryController@show');

//Rutas de Order
Route::get('/permission/all','OrderController@index');
Route::get('/permission/{id}','OrderController@show');

//Rutas de Payment
Route::get('/permission/all','PaymentController@index');
Route::get('/permission/{id}','PaymentController@show');

//Rutas de Permission
Route::get('/permission/all','PermissionController@index');
Route::get('/permission/{id}','PermissionController@show');

//Rutas de Product
Route::get('/permission/all','ProductController@index');
Route::get('/permission/{id}','ProductController@show');

//Rutas de Rating
Route::get('/permission/all','RatingController@index');
Route::get('/permission/{id}','RatingController@show');

//Rutas de Record
Route::get('/permission/all','RecordController@index');
Route::get('/permission/{id}','RecordController@show');

//Rutas de Rol
Route::get('/permission/all','RolController@index');
Route::get('/permission/{id}','RolController@show');

//Rutas de RolPermission
Route::get('/permission/all','RolPermissionController@index');
Route::get('/permission/{id}','RolPermissionController@show');

//Rutas de User
Route::get('/permission/all','UserController@index');
Route::get('/permission/{id}','UserController@show');

//Rutas de UserRol
Route::get('/permission/all','UserRolController@index');
Route::get('/permission/{id}','UserRolController@show');
