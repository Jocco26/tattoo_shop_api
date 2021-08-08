<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//show all
//Route::get('clients','ClientController@index');
Route::get('/clients', 'App\Http\Controllers\ClientController@index');

//show one
//Route::get('client/{id}','ClientController@show');
Route::get('/client/{id}', 'App\Http\Controllers\ClientController@show');

//create
//Route::post('client','ClientController@store');
Route::post('/client', 'App\Http\Controllers\ClientController@store');

//update
//Route::put('clients','ClientController@store');
Route::put('/client', 'App\Http\Controllers\ClientController@store');

//delete
//Route::delete('clients','ClientController@destroy');
Route::delete('/client/{id}', 'App\Http\Controllers\ClientController@destroy');

//supplies
Route::get('/supplies', 'App\Http\Controllers\SuppliesController@index');

//loading navbar and mega menu items for supplies
Route::get('/supplies/show', 'App\Http\Controllers\SuppliesController@loadSuppliesCategories');
Route::get('/supplies/show02', 'App\Http\Controllers\SuppliesController@loadProductsCategories');

Route::get('/supplies/brands', 'App\Http\Controllers\SuppliesController@loadBrands');


//layout testing
Route::get('/brands',function(){
    return view('brands');
});

Route::get('/somebrand',function(){
    return view('test');
});