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

Route::get('/','HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact',function(){
	return view('main.contact');
})->name('contact');
//products routes

Route::get('/products/{id}/show', 'ProductController@show')->name('product.show');

Route::get('/products/type/{type?}','ProductController@index')->name('product.index');

Route::get('/products/cat/{catId}','ProductController@showByCat')->name('product.cat');

Route::get('/products/search','ProductController@search')->name('products.search');

Route::get('/products/checkout/{productID}','ProductController@checkout')
			->name('product.checkout')
			->middleware('auth');

Route::post('/products/checkout/store','ProductController@storeCheckoutrequest')->name('product.checkout.store');
Route::delete('/products/cart/remove','ProductController@removeFromCart')->name('product.cart.remove');

//customer routes

Route::get('/customer','CustomerController@dashboard')->name('customer.dashboard');
Route::get('/customer/cart/','CustomerController@cart')->name('customer.cart')->middleware('auth');
Route::get('/customer/profile','CustomerController@profile')->name('customer.profile')->middleware('auth');
Route::post('/customer/profile','CustomerController@updateProfile')->name('customer.profile.update');
//cart routes

Route::post('cart/store','ProductController@addToCart')->name('cart.store')->middleware('auth');
Route::get('/cart/checkout','ProductController@checkout')->name('cart.checkout')->middleware('auth');

//seller routes

Route::get('/seller/products','SellerController@products')->name('seller.product');
Route::get('/seller/products/add','SellerController@showAddProduct')->name('seller.product.show');
Route::post('/seller/products/add','SellerController@addProduct')->name('seller.product.store');
Route::get('/seller/products/{id}','SellerController@showEditProduct')->name('seller.product.edit');
Route::post('/seller/product/{id}/update','SellerController@updateProduct')->name('seller.product.update');
Route::get('/seller/orders','SellerController@orders')->name('seller.orders');
//business route

Route::post('/business/store','SellerController@addBusiness')->name('seller.business.add');
