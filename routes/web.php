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

// Route::get('/', function () {
//     //return view('layouts.template');
// });

Route::get('/', 'PortalController@index')->name('home'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'post-user'], function(){
    Route::get('/', 'PostController@index')->name('view-post');
    Route::get('/create',"PostController@create")->name('create-post');
    Route::post('/store',"PostController@store")->name('store-post');
    Route::get('/edit/{id}',"PostController@edit")->name('edit-post');
    Route::post('/update/{id}','PostController@update')->name('update-post');
    Route::get('/delete/{id}','PostController@destroy')->name('destroy-post');
});

// Route::group(['prefix' => 'post'], function(){
//     Route::get('/', 'PostController@index')->name('view-post');
//     Route::get('/create',"PostController@create")->name('create-post');
// });

Route::get('/post', 'PortalController@postAll')->name('post-all');
Route::get('/post/email', 'PortalController@postEmal')->name('post-email');
Route::get('/user/comment', 'PortalController@userComment')->name('user-comment');
Route::get('/user/comment-guest', 'PortalController@userCommentGuest')->name('user-comment-guest');