<?php

Route::group(['middleware' => ['web' , 'CustomAuthCheck'], 'prefix' => 'aboutus', 'namespace' => 'Modules\AboutUs\Http\Controllers'], function()
{

	//GET ROUTES

    Route::get('list-about-us', [
    	'as' => 'list-about-us', 
    	'uses' => 'AboutUsController@getListAboutUs'
    ]);

    Route::get('create-about-us', [
    	'as' => 'create-about-us', 
    	'uses' => 'AboutUsController@getCreateAboutUs'
    ]);

    Route::get('edit-about-us/{id}', [
    	'as' => 'edit-about-us', 
    	'uses' => 'AboutUsController@getEditAboutUs'
    ]);

    Route::get('view-about-us/{id}', [
    	'as' => 'view-about-us', 
    	'uses' => 'AboutUsController@getViewAboutUs'
    ]);

    Route::get('delete-about-us/{id}', [
    	'as' => 'delete-about-us', 
    	'uses' => 'AboutUsController@getDeleteAboutUs'
    ]);

    //POST ROUTES

    Route::post('about-us-create-post', [
    	'as' => 'about-us-create-post', 
    	'uses' => 'AboutUsController@postCreateAboutUs'
    ]);

    Route::post('edit-us-post/{id}', [
    	'as'=> 'edit-us-post', 
    	'uses' => 'AboutUsController@postEditAboutUs'
    ]);
});
