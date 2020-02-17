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
//Admin
Route::view('admin/login','admin.pages.login')->name('login.admin');
Route::post('admin/login','UserController@loginAdmin')->name('admin.login');

Route::get('getproducttype','AjaxController@getProductType');
Route::group(['prefix' => 'admin', 'middleware' => 'adminMiddleware'],function(){
	Route::view('/','admin.pages.index');
	Route::resource('category','CategoryController');
	Route::resource('producttype','ProductTypeController');
	Route::resource('product','ProductController');

	Route::post('updatePro/{id}','ProductController@update');
	
	Route::resource('order','OrderController');
	Route::post('update/{id}', 'OrderController@postEditOrder');
	Route::get('delete/{id}', 'OrderController@getDeleteOrder')->name('deleteOrder');
	Route::get('vieworder/{id}','OrderController@getViewOrder')->name('viewOrder');
	Route::get('deletedetail/{id}','OrderController@deleteDetail')->name('delete_orderdetail');

	Route::resource('user','UserController');
	Route::get('edit/{id}', 'UserController@getEditUser');
	Route::post('edit/{id}', 'UserController@postEditUser');
	Route::get('add', 'UserController@getAddUser');
	Route::post('add', 'UserController@postAddUser');
	Route::get('delete/{id}', 'UserController@getDeleteUser')->name('delUser');

	Route::resource('contact','ContactController');
	Route::get('search','ProductController@search')->name('adminsearch');






});

//Client
Route::get('callback/{social}','UserController@handleProviderCallback');
Route::get('login/{social}','UserController@redirectProvider')->name('login.social');
Route::get('logout','UserController@logout');
Route::post('updatepass','UserController@updatePassClient')->name('updatepassword');
Route::post('login','UserController@loginClient')->name('login');
Route::post('register','UserController@registerClient')->name('register');

Route::get('/','HomeController@index');
Route::get('trangchu','HomeController@index');
Route::get('trangchu.html','HomeController@index');

Route::resource('cart','CartController');
Route::get('addcart/{id}','CartController@addCart')->name('addCart');
Route::get('checkout','CartController@checkout')->name('cart.ckeckout');

Route::resource('customer','CustomerController');
Route::get('{slug}.html', 'HomeController@getDetail');

Route::get('info','HomeController@infoClient')->name('info');
Route::get('order','HomeController@getorder')->name('order');

Route::get('allpro','HomeController@allPro')->name('allpro');
Route::get('search','HomeController@search')->name('search');

Route::post('comment','HomeController@postComment')->name('comment');

Route::get('gioi-thieu','HomeController@getabout')->name('about');
Route::get('lien-he','HomeController@getcontact')->name('contact');
Route::post('lien-he','HomeController@postcontact')->name('contact');



