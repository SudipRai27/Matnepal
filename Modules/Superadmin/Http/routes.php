<?php

Route::group(['middleware' => 'web', 'prefix' => 'superadmin', 'namespace' => 'Modules\Superadmin\Http\Controllers'], function()
{

	/// GET REQUEST

    Route::get('/home', [
    	'as' => 'superadmin-home', 
    	'uses' => 'SuperadminController@getDashboard'
    	])->middleware('CustomAuthCheck');

    Route::get('/create', [
    	'as' => 'superadmin-create', 
    	'uses' => 'SuperadminController@getCreate'
    	])->middleware('CustomAuthCheck');


    Route::get('/login', [
    	'as' => 'superadmin-login', 
    	'uses' => 'SuperadminController@getLogin'
    	])->middleware('RedirectIfAuthenticated');


    Route::get('superadmin-logout', [
    	'as' => 'superadmin-logout', 
    	'uses' => 'SuperadminController@getLogout'
    	])->middleware('CustomAuthCheck');


    ///POST REQUEST

    Route::post('/superadmin-create-post', [
    	'as' => 'superadmin-create-post', 
    	'uses' => 'SuperadminController@postCreate'
    	])->middleware('CustomAuthCheck');


    Route::post('/superadmin-login-post', [
    	'as' => 'superadmin-login-post', 
    	'uses' => 'SuperadminController@postLogin'
    	])->middleware('RedirectIfAuthenticated');
});
