<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'blocks', 'namespace' => 'Modules\Blocks\Http\Controllers'], function()
{

	//GET ROUTES

    Route::get('list-blocks', [
    	'as' => 'list-blocks', 
    	'uses' => 'BlocksController@getListBlocks'
    ]);

    Route::get('create-blocks', [
    	'as' => 'create-blocks', 
    	'uses' => 'BlocksController@getCreateBlocks'
    ]);

    Route::get('edit-blocks/{id}', [
    	'as' => 'edit-blocks', 
    	'uses' => 'BlocksController@getEditBlocks'
    ]);

    Route::get('delete-blocks/{id}', [
    	'as' => 'delete-blocks',
    	'uses' => 'BlocksController@getDeleteBlocks'
    ]);

    Route::get('view-blocks/{id}', [
    	'as' => 'view-blocks', 
    	'uses' => 'BlocksController@getViewBlocks'
    ]);

    //POST ROUTES
    Route::post('create-blocks-post', [
    	'as' => 'create-blocks-post', 
    	'uses' => 'BlocksController@postCreateBlocks'
    ]);

    Route::post('edit-blocks-post/{id}', [
    	'as' => 'edit-blocks-post', 
    	'uses' => 'BlocksController@postEditBlocks'
    ]);

});
