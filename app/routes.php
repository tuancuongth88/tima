<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::group(['prefix' => 'admin'], function () {
    {
        Route::get('/login', array('uses' => 'AdminController@login', 'as' => 'admin.login'));
        Route::post('/login', array('uses' => 'AdminController@doLogin'));
        Route::get('/logout', array('uses' => 'AdminController@logout', 'as' => 'admin.logout'));
        Route::resource('/', 'AdminController');

        Route::get('user/respassword/{id}', array('uses' => 'UserController@resPassword', 'as' => 'resPassword'));
        Route::post('user/updatePassword/{id}', array('uses' => 'UserController@updatePassword', 'as' => 'updatePassword'));
        Route::resource('/user', 'UserController');

        Route::resource('/dashboard', 'DashboardController');
    }
});
