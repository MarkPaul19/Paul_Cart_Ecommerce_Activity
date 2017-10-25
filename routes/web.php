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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();		
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/product', 'HomeController@cart');
Route::get('/cart', 'HomeController@usercart');
Route::get('/billing', 'HomeController@userbill');
Route::get('/shipping', 'HomeController@shipping');
Route::get('/invoice', 'HomeController@invoice');

Route::get('/addcart/{product_id}', 'HomeController@add');
Route::get('/remove/{prod_id}', 'HomeController@remove_product');
Route::post('/shipping', 'HomeController@shipping_info');
Route::post('/add_payment', 'HomeController@payment');
Route::get('/thankyoupage', 'HomeController@typ');


