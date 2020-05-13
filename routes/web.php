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


// Xây dựng route project

//Route Frontend
Route::get('', 'FrontendController@GetIndex');
Route::get('about', 'FrontendController@GetAbout');
Route::get('cart', 'FrontendController@GetCart');
Route::get('checkout', 'FrontendController@GetCheckout');
Route::get('complete', 'FrontendController@GetComplete');
Route::get('contact', 'FrontendController@GetContact');
Route::get('detail', 'FrontendController@GetDetail');
Route::get('shop', 'FrontendController@GetShop');

//Route Backend

Route::get('addproduct','BackendController@GetAddProduct');
Route::get('adduser','BackendController@GetAddUser');
Route::get('category','BackendController@GetCategory');
Route::get('detailorder','BackendController@GetDetailOrder');
Route::get('editcategory','BackendController@GetEditCategory');
Route::get('editproduct','BackendController@GetEditProduct');
Route::get('edituser','BackendController@GetEditUser');
Route::get('index','BackendController@GetIndex');
Route::get('listproduct','BackendController@GetListProduct');
Route::get('listuser','BackendController@GetListUser');
Route::get('login','BackendController@GetLogin');
Route::get('order','BackendController@GetOrder');
Route::get('processed','BackendController@GetProcessed');
