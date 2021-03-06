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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('index','ProductController');

Route::get('product',['as'=> 'home', 'uses' => 'ProductController@index']);

Route::get('/',['as'=> 'abc', 'uses' => 'ProductController@index']);

Route::get('productDetail/{ProductId}',['as'=> 'proddetail', 'uses' => 'ProductController@getProductDetail']);

Route::get('addProduct',['as'=> 'prodadd', 'uses' => 'ProductController@addProduct']);

Route::post('',['as'=> 'insert', 'uses' => 'ProductController@insertProduct']);

Route::get('productlist',['as'=> 'prodlist', 'uses' => 'ProductController@listProduct']);

Route::get('productlist/{ProductId}',['as'=> 'proddel', 'uses' => 'ProductController@delProduct']);