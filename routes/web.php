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
Route::delete('/ad/delete/{id}','AdController@destroy');
Route::post('/ad/create','AdController@store');
Route::put('/ad/update/{id}','AdController@update');
Route::put('/ad/sdelete/{id}','AdController@delete');
Route::put('/ad/restore/{id}','AdController@restore');

//Rutas de Category
Route::get('/category/all','CategoryController@index');
Route::get('/category/{id}','CategoryController@show');
Route::delete('/category/delete/{id}','CategoryController@destroy');
Route::post('/category/create','CategoryController@store');
Route::put('/category/update/{id}','CategoryController@update');
Route::delete('/category/sdelete/{id}','CategoryController@delete');
Route::put('/category/restore/{id}','CategoryController@restore');


//Rutas de Order
Route::get('/order/all','OrderController@index');
Route::get('/order/{id}','OrderController@show');
Route::delete('/order/delete/{id}','OrderController@destroy');
Route::post('/order/create','OrderController@store');
Route::put('/order/update/{id}','OrderController@update');
Route::delete('/order/sdelete/{id}','OrderController@delete');
Route::put('/order/restore/{id}','OrderController@restore');

//Rutas de Payment
Route::get('/payment/all','PaymentController@index');
Route::get('/payment/{id}','PaymentController@show');
Route::delete('/payment/delete/{id}','PaymentController@destroy');
Route::post('/payment/create','PaymentController@store');
Route::put('/payment/update/{id}','PaymentController@update');
Route::delete('/payment/sdelete/{id}','PaymentController@delete');
Route::put('/payment/restore/{id}','PaymentController@restore');

//Rutas de Permission
Route::get('/permission/all','PermissionController@index');
Route::get('/permission/{id}','PermissionController@show');
Route::delete('/permission/delete/{id}','PermissionController@destroy');
Route::post('/permission/create','PermissionController@store');
Route::put('/permission/update/{id}','PermissionController@update');
Route::delete('/permission/sdelete/{id}','PermissionController@delete');
Route::put('/permission/restore/{id}','PermissionController@restore');

//Rutas de Product
Route::get('/product/all','ProductController@index');
Route::get('/product/{id}','ProductController@show');
Route::delete('/product/delete/{id}','ProductController@destroy');
Route::post('/product/create','ProductController@store');
Route::put('/product/update/{id}','ProductController@update');
Route::delete('/product/sdelete/{id}','ProductController@delete');
Route::put('/product/restore/{id}','ProductController@restore');

//Rutas de Rating
Route::get('/rating/all','RatingController@index');
Route::get('/rating/{id}','RatingController@show');
Route::delete('/rating/delete/{id}','RatingController@destroy');
Route::post('/rating/create','RatingController@store');
Route::put('/rating/update/{id}','RatingController@update');
Route::delete('/rating/sdelete/{id}','RatingController@delete');
Route::put('/rating/restore/{id}','RatingController@restore');

//Rutas de Record
Route::get('/record/all','RecordController@index');
Route::get('/record/{id}','RecordController@show');
Route::delete('/record/delete/{id}','RecordController@destroy');
Route::post('/record/create','RecordController@store');
Route::put('/record/update/{id}','RecordController@update');
Route::delete('/record/sdelete/{id}','RecordController@delete');
Route::put('/record/restore/{id}','RecordController@restore');

//Rutas de Rol
Route::get('/rol/all','RolController@index');
Route::get('/rol/{id}','RolController@show');
Route::delete('/rol/delete/{id}','RolController@destroy');
Route::post('/rol/create','RolController@store');
Route::put('/rol/update/{id}','RolController@update');
Route::delete('/rol/sdelete/{id}','RolController@delete');
Route::put('/rol/restore/{id}','RolController@restore');

//Rutas de RolPermission
Route::get('/rolpermission/all','RolPermissionController@index');
Route::get('/rolpermission/{id}','RolPermissionController@show');
Route::delete('/rolpermission/delete/{id}','RolPermissionController@destroy');
Route::post('/rolpermission/create','RolPermissionController@store');
Route::put('/rolpermission/update/{id}','RolPermissionController@update');
Route::delete('/rolpermission/sdelete/{id}','RolPermissionController@delete');
Route::put('/rolpermission/restore/{id}','RolPermissionController@restore');

//Rutas de User
Route::get('/user/all','UserController@index');
Route::get('/user/{id}','UserController@show');
Route::delete('/user/delete/{id}','UserController@destroy');
Route::post('/user/create','UserController@store');
Route::put('/user/update/{id}','UserController@update');
Route::delete('/user/sdelete/{id}','UserController@delete');
Route::put('/user/restore/{id}','UserController@restore');

//Rutas de UserRol
Route::get('/userrol/all','UserRolController@index');
Route::get('/userrol/{id}','UserRolController@show');
Route::delete('/userrol/delete/{id}','UserRolController@destroy');
Route::post('/userrol/create','UserRolController@store');
Route::put('/userrol/update/{id}','UserRolController@update');
Route::delete('/userrol/sdelete/{id}','UserRolController@delete');
Route::put('/userrol/restore/{id}','UserRolController@restore');