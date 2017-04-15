<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::group(['middleware' => ['web']], function () {
    Route::get('user/login','User/LoginController@login');
    Route::get('user/register','User/LoginController@register');
});

Route::group(['middleware' => ['user.login']], function () {
    Route::get('user/authen','User/UserController@authen');
    Route::get('user/subpiao','User/UserController@subpiao');
});
