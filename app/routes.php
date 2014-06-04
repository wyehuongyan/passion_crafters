<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'HomeController@showWelcome');


Route::model("product", "Product");
Route::model("orderItem", "OrderItem");

// show pages
Route::get('/', 'ProductsController@showIndex');
Route::get('/products', 'ProductsController@showProducts');
Route::get('product/{product}', 'ProductsController@showProduct');
Route::get('cart', 'OrdersController@showCart');

// api calls
Route::group(array("prefix" => "api"), function() {
	Route::get('products', 'ProductsController@products');
	Route::get('cart', 'OrdersController@cart');
	Route::post('cart/add_item', 'OrdersController@addItem');
	Route::delete('cart/remove_item/{orderItem}', 'OrdersController@removeItem');
});

?>