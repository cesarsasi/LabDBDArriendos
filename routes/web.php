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

//Rutas de evaluacion
Route::get('/assessment/all', 'AssessmentController@index');
Route::get('/assessment/{id}', 'AssessmentController@show');
Route::post('/assessment/create', 'AssessmentController@store');
Route::delete('/assessment/delete/{id}', 'AssessmentController@destroy');

//Rutas de categoria
Route::get('/category/all', 'CategoryController@index');
Route::get('/category/{id}', 'CategoryController@show');
Route::post('/category/create', 'CategoryController@store');
Route::delete('/category/delete/{id}', 'CategoryController@destroy');

//Rutas de localizacion
Route::get('/location/all', 'LocationController@index');
Route::get('/location/{id}', 'LocationController@show');
Route::post('/location/create', 'LocationController@store');
Route::delete('/location/delete/{id}', 'LocationController@destroy');

//Rutas de producto
Route::get('/product/all', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::post('/product/create', 'ProductController@store');
Route::delete('/product/delete/{id}', 'ProductController@destroy');

//Rutas de publicacion
Route::get('/publication/all', 'PublicationController@index');
Route::get('/publication/{id}', 'PublicationController@show');
Route::post('/publication/create', 'PublicationController@store');
Route::delete('/publication/delete/{id}', 'PublicationController@destroy');

//Rutas de compra
Route::get('/purchase/all', 'PurchaseController@index');
Route::get('/purchase/{id}', 'PurchaseController@show');
Route::post('/purchase/create', 'PurchaseController@store');
Route::delete('/purchase/delete/{id}', 'PurchaseController@destroy');

//Rutas de rol
Route::get('/rol/all', 'RolController@index');
Route::get('/rol/{id}', 'RolController@show');
Route::post('/rol/create', 'RolController@store');
Route::delete('/rol/delete/{id}', 'RolController@destroy');

//Rutas del roluser
Route::get('/rolUser/all', 'RolUserController@index');
Route::get('/rolUser/{id}', 'RolUserController@show');
Route::post('/rolUser/create', 'RolUserController@store');
Route::delete('/rolUser/delete/{id}', 'RolUserController@destroy');

//Rutas de transaccion
Route::get('/transaction/all', 'TransactionController@index');
Route::get('/transaction/{id}', 'TransactionController@show');
Route::post('/transaction/create', 'TransactionController@store');
Route::delete('/transaction/delete/{id}', 'TransactionController@destroy');

//Rutas del usuario
Route::get('/user/all', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::post('/user/create', 'UserController@store');
Route::delete('/user/delete/{id}', 'UserController@destroy');