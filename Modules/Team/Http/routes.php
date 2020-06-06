<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'team', 'namespace' => 'Modules\Team\Http\Controllers'], function()
{
    //GET ROUTES
    Route::get('list-team', [
    	'as' => 'list-team', 
    	'uses' => 'TeamController@getListTeam'
    	]);

    Route::get('add-team', [
    	'as' => 'add-team', 
    	'uses' => 'TeamController@getAddTeam'
    	]);

    Route::get('view-team/{id}', [
        'as' => 'view-team', 
        'uses' => 'TeamController@getViewTeam'
        ]);


    Route::get('delete-team/{id}', [
        'as' => 'delete-team', 
        'uses' => 'TeamController@getDeleteTeam'
        ]);


    Route::get('edit-team/{id}', [
        'as' => 'edit-team', 
        'uses' => 'TeamController@getEditTeam'
        ]);

    //POST ROUTES

    Route::post('add-team-post', [
    	'as' => 'add-team-post', 
    	'uses' => 'TeamController@postAddTeam'
    	]);

    Route::post('edit-team-post/{id}', [
        'as' => 'edit-team-post', 
        'uses' => 'TeamController@postEditTeam'
        ]);
});
