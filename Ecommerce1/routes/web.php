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

Route::get('/','user_controller@homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product_info','admin_controller@product_info')->middleware('admin_url_checking');
Route::post('/save_product_info','admin_controller@save_product_info')->middleware('admin_url_checking');
Route::get('/manage_product','admin_controller@manage_product')->middleware('admin_url_checking');
Route::get('/edit_product/{id}','admin_controller@edit_product')->middleware('admin_url_checking');
Route::post('/save_edit_product','admin_controller@save_edit_product')->middleware('admin_url_checking');
Route::get('/pub_unpub','admin_controller@pub_unpub')->middleware('admin_url_checking');
Route::post('/pub_unpub_product','admin_controller@pub_unpub_product')->middleware('admin_url_checking');
Route::get('/signup_form','user_controller@signup_form');
Route::post('/user_signup','user_controller@user_signup');
Route::post('/user_login','user_controller@user_login');
Route::get('/user_logout','user_controller@user_logout')->middleware('user_url_checking');
Route::post('/add_to_cart','user_controller@add_to_cart');
Route::get('/cart_show','user_controller@cart_show');
Route::post('/update_cart','user_controller@update_cart');
Route::get('/remove_product/{id}','user_controller@remove_product');
Route::get('/clear_cart','user_controller@clear_cart');