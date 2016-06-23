<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::model('product', 'App\Product');
Route::model('customer', 'App\Customer');

Route::group(['prefix' => 'adminAuth' , 'middleware' => 'auth' ] , function(){

Route::get('product',['as' => 'products.index', 'uses' => 'ProductController@getIndex']);

Route::get('product/create', ['as' => 'products.create', 'uses' => 'ProductController@getNewProduct']);
Route::post('product/create', ['as' => 'products.post', 'uses' => 'ProductController@postProduct']);

Route::get('product/{product}', ['as' => 'product.edit', 'uses' => 'ProductController@getEditProduct']);
Route::post('product/{product}', ['as' => 'product.post', 'uses' => 'ProductController@postProduct']);

Route::get('product/delete/{product}', ['as' => 'product.delete', 'uses' => 'ProductController@deleteProduct']);

Route::get('product/sell/{product}', ['as' => 'product.sell', 'uses' => 'ProductController@sellProduct']);



Route::model('customer', 'App\Customer');
Route::get('customer', ['as' => 'customer.index', 'uses' => 'CustomerController@getIndex']);
Route::get('customer/create', ['as' => 'customer.create', 'uses' => 'CustomerController@getNewCustomer']);

Route::post('customer/create', ['as' => 'customer.post', 'uses' => 'CustomerController@postCustomer']);
Route::get('customer/{customer}', ['as' => 'customer.edit', 'uses' => 'CustomerController@getEditCustomer']);
Route::post('customer/{customer}', ['as' => 'customer.post', 'uses' => 'CustomerController@postCustomer']);

Route::get('customer/delete/{customer}', ['as' => 'customer.delete', 'uses' => 'CustomerController@deleteCustomer']);

});

Route::get('/', ['as'=>'front.home', 'uses'=>'ProductController@home']);

