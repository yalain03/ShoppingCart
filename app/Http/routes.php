<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);

Route::get('/signup', [
    'uses'=>'UserController@getSignup',
    'as'=>'user.signup'
]);

Route::post('/signup', [
    'uses'=>'UserController@postSignup',
    'as'=>'user.signup'
]);

Route::get('/signin', [
    'uses'=>'UserController@getSignin',
    'as'=>'user.signin'
]);

Route::post('/signin', [
    'uses'=>'UserController@postSignin',
    'as'=>'user.signin'
]);

Route::get('/user/profile', [
    'uses'=>'UserController@getProfile',
    'as'=>'user.profile'
]);

