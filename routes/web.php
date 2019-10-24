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


Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'category'], function() {
        Route::get('list-category','CategoryController@index');
        Route::get('list-category/create','CategoryController@create');
        Route::get('list-category/edit/{id}','CategoryController@edit');
    });
    Route::group(['prefix' => 'user'], function() {
        Route::get('list-user','UserController@index');
        Route::get('list-user/create','UserController@create');
        Route::get('list-user/edit/{id}','UserController@edit');
    });
    Route::group(['prefix' => 'product'], function() {
        Route::get('list-product','ProductController@index');
        Route::get('list-product/create','ProductController@create');
        Route::get('list-product/edit/{id}','ProductController@edit');
    });
});
