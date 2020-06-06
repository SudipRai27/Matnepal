<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{

	//GET ROUTES
    /*Route::get('/register', [
    	'as' => 'user-register', 
    	'uses' => 'UserController@getRegister'
    	]);

    Route::get('/login', [
    	'as' => 'user-login', 
    	'uses' => 'UserController@getUserLogin'
    	]);

    Route::get('/home', [
    	'as' => 'user-home', 
    	'uses' => 'UserController@getUserHome'
    	]);

    Route::get('/user-logout',[
    	'as' => 'user-logout', 
    	'uses' => 'UserController@getLogout'
    	]);

    //POST ROUTES

    Route::post('/user-create-post', [
    	'as' => 'user-create-post', 
    	'uses' => 'UserController@postRegister'
    	]);

    Route::post('/user-login-post', [
    	'as' => 'user-login-post', 
    	'uses' => 'UserController@postUserLogin'
    	]);*/

});
