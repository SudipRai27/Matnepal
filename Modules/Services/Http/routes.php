<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'] , 'prefix' => 'services', 'namespace' => 'Modules\Services\Http\Controllers'], function()
{
    //GET ROUTES
    Route::get('list-services', [
    	'as' => 'list-services', 
    	'uses' => 'ServicesController@getListServices'
    	]);


    Route::get('add-services', [
        'as' => 'add-services', 
        'uses' => 'ServicesController@getAddServices'
        ]);


    Route::get('view-services/{id}', [
        'as' => 'view-services', 
        'uses' => 'ServicesController@getViewServices'
        ]);


    Route::get('delete-services/{id}', [
        'as' => 'delete-services', 
        'uses' => 'ServicesController@getDeleteServices'
        ]);

    Route::get('edit-services/{id}', [
        'as' => 'edit-services', 
        'uses' => 'ServicesController@getEditServics'
        ]);

    //POST ROUTES

    Route::post('add-services-post', [
    	'as' => 'add-services-post', 
    	'uses' => 'ServicesController@postAddServices'
    	]);


    Route::post('edit-services-post/{id}', [
        'as' => 'edit-services-post', 
        'uses' => 'ServicesController@postEditServices'
        ]); 
});
