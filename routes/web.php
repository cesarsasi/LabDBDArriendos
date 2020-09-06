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

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Rutas de evaluacion
Route::get('/assessment/all', 'AssessmentController@index');
Route::get('/assessment/{id}', 'AssessmentController@show');
Route::post('/assessment/create', 'AssessmentController@store');
Route::put('/assessment/update/{id}', 'AssessmentController@update');
Route::delete('/assessment/delete/{id}', 'AssessmentController@delete');

//Rutas de categoria
Route::get('/category/all', 'CategoryController@index');
Route::get('/category/{id}', 'CategoryController@show');
Route::post('/category/create', 'CategoryController@store');
Route::put('/category/update/{id}', 'CategoryController@update');
Route::delete('/category/delete/{id}', 'CategoryController@delete');

//Rutas de localizacion
Route::get('/location/all', 'LocationController@index');
Route::get('/location/{id}', 'LocationController@show');
Route::post('/location/create', 'LocationController@store');
Route::put('/location/update/{id}', 'LocationController@update');
Route::delete('/location/delete/{id}', 'LocationController@delete');

//Rutas de producto
Route::get('/product/all', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::post('/product/create', 'ProductController@store');
Route::put('/product/update/{id}', 'ProductController@update');
Route::delete('/product/delete/{id}', 'ProductController@delete');

//Rutas de publicacion
Route::get('/publication/all', 'PublicationController@index');
Route::get('/publication/{id}', 'PublicationController@show');
Route::post('/publication/create', 'PublicationController@store');
Route::put('/publication/update/{id}', 'PublicationController@update');
Route::delete('/publication/delete/{id}', 'PublicationController@delete');

//Rutas de compra
Route::get('/purchase/all', 'PurchaseController@index');
Route::get('/purchase/{id}', 'PurchaseController@show');
Route::post('/purchase/create', 'PurchaseController@store');
Route::put('/purchase/update/{id}', 'PurchaseController@update');
Route::delete('/purchase/delete/{id}', 'PurchaseController@delete');

//Rutas de rol
Route::get('/rol/all', 'RolController@index');
Route::get('/rol/{id}', 'RolController@show');
Route::post('/rol/create', 'RolController@store');
Route::put('/rol/update/{id}', 'RolController@update');
Route::delete('/rol/delete/{id}', 'RolController@delete');

//Rutas del roluser
Route::get('/rolUser/all', 'RolUserController@index');
Route::get('/rolUser/{id}', 'RolUserController@show');
Route::post('/rolUser/create', 'RolUserController@store');
Route::put('/rolUser/update/{id}', 'RolUserController@update');
Route::delete('/rolUser/delete/{id}', 'RolUserController@delete');

//Rutas de transaccion
Route::get('/transaction/all', 'TransactionController@index');
Route::get('/transaction/{id}', 'TransactionController@show');
Route::post('/transaction/create', 'TransactionController@store');
Route::put('/transaction/update/{id}', 'TransactionController@update');
Route::delete('/transaction/delete/{id}', 'TransactionController@delete');

//Rutas del usuario
Route::get('/user/all', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::post('/user/create', 'UserController@store');
Route::put('/user/update/{id}', 'UserController@update');
Route::delete('/user/delete/{id}', 'UserController@delete');