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

Route::get('/blog/{post_id?}', [
    'uses' => 'PostController@getPost',
    'as' => 'index'
]);

Route::get('/admin', [
    'uses' => 'AdminController@getIndex',
    'as' => 'admin'
]);

Route::post('/admin/createPost', [
    'uses' => 'PostController@createPost',
    'as' => 'create'
]);

Route::post('/admin/deletePost/{post_id?}', [
    'uses' => 'PostController@deletePost',
    'as' => 'delete'
]);

Route::get('/admin/postEditor', [
    'uses' => 'PostController@editPost',
    'as' => 'postEditor'
]);
