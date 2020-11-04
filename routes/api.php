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
// companies
Route::post('mysignup', 'CompanyController@postRegistration');
Route::post('mylogin', 'CompanyController@postLogin');
// products
Route::post('products', 'ProductController@addProduct');
Route::get('products', 'ProductController@getProducts');
Route::get('products/{id}', 'ProductController@getProduct');
Route::put('products/{id}', 'ProductController@editProduct');
Route::put('products/{id}', 'ProductController@editProduct');
Route::delete('products/{id}', 'ProductController@deleteProduct');