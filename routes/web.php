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
Route::get('/ad/all','AdController@index');
Route::get('/ad/{id}','AdController@show');

//Rutas de Category
Route::get('/category/all','CategoryController@index');
Route::get('/category/{id}','CategoryController@show');

//Rutas de Order
Route::get('/order/all','OrderController@index');
Route::get('/order/{id}','OrderController@show');

//Rutas de Payment
Route::get('/payment/all','PaymentController@index');
Route::get('/payment/{id}','PaymentController@show');

//Rutas de Permission
Route::get('/permission/all','PermissionController@index');
Route::get('/permission/{id}','PermissionController@show');

//Rutas de Product
Route::get('/product/all','ProductController@index');
Route::get('/product/{id}','ProductController@show');

//Rutas de Rating
Route::get('/rating/all','RatingController@index');
Route::get('/rating/{id}','RatingController@show');

//Rutas de Record
Route::get('/record/all','RecordController@index');
Route::get('/record/{id}','RecordController@show');

//Rutas de Rol
Route::get('/rol/all','RolController@index');
Route::get('/rol/{id}','RolController@show');

//Rutas de RolPermission
Route::get('/rolpermission/all','RolPermissionController@index');
Route::get('/rolpermission/{id}','RolPermissionController@show');

//Rutas de User
Route::get('/user/all','UserController@index');
Route::get('/user/{id}','UserController@show');

//Rutas de UserRol
Route::get('/userrol/all','UserRolController@index');
Route::get('/userrol/{id}','UserRolController@show');
