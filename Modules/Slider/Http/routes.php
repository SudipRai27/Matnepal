<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'slider', 'namespace' => 'Modules\Slider\Http\Controllers'], function()
{
	//GET ROUTES

    Route::get('list-slider', [
    	'as' => 'list-slider', 
    	'uses' => 'SliderController@getListSlider'
    	]);


    Route::get('add-slider', [
    	'as' => 'add-slider', 
    	'uses' => 'SliderController@getAddSlider'
    	]);

    Route::get('edit-slider/{id}', [
        'as' => 'edit-slider', 
        'uses' => 'SliderController@getEditSlider'
        ]);

    Route::get('delete-slider/{id}', [
    	'as' => 'delete-slider', 
    	'uses' => 'SliderController@getDeleteSlider'
    	]);

    //POST ROUTES

    Route::post('add-slider-post', [
    	'as' => 'add-slider-post', 
    	'uses' => 'SliderController@postAddSlider'
    	]);

    Route::post('edit-slider-post/{id}', [
        'as' => 'edit-slider-post', 
        'uses' => 'SliderController@postEditSlider'
        ]);
});
