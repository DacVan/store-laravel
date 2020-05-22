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
Route::get('', 'frontend\IndexController@GetIndex');
Route::get('about', 'frontend\IndexController@GetAbout');
Route::get('contact', 'frontend\IndexController@GetContact');

//login
Route::get('login','frontend\LoginController@GetLogin');
Route::post('login', 'frontend\LoginController@PostLogin');

//product   

Route::group(['prefix' => 'product'], function () {
    Route::get('detail', 'frontend\ProductController@GetDetail');
    Route::get('shop', 'frontend\ProductController@GetShop');
});

//checkout
Route::group(['prefix' => 'checkout'], function () {
    Route::get('', 'frontend\CheckoutController@GetCheckout');
    Route::post('', 'frontend\CheckoutController@PostCheckout');
    Route::get('complete', 'frontend\CheckoutController@GetComplete');
});
//cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('', 'frontend\CartController@GetCart');
});



//Route Backend 
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {

    Route::get('','backend\IndexController@GetIndex'); // vào trang index
    Route::get('logout', 'backend\IndexController@Logout');


    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','backend\CategoryController@GetCategory');
        Route::post('','backend\CategoryController@PostCategory');
        Route::get('edit','backend\CategoryController@GetEditCategory');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('add','backend\UserController@GetAddUser');
        Route::post('add','backend\UserController@PostAddUser');

        Route::get('edit','backend\UserController@GetEditUser');
        Route::get('','backend\UserController@GetListUser');    
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('add','backend\ProductController@GetAddProduct');
        Route::post('add','backend\ProductController@PostAddProduct');
        Route::get('edit','backend\ProductController@GetEditProduct');
        Route::get('','backend\ProductController@GetListProduct');
    });
    
    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('detail','backend\OrderController@GetDetailOrder');
        Route::get('','backend\OrderController@GetOrder');
        Route::get('processed','backend\OrderController@GetProcessed');
    });
});


