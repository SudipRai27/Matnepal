<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'blog', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{
	//GET ROUTES

	Route::get('list-blog', [
		'as' => 'list-blog',
		'uses' => 'BlogController@getListBlog'
		]);

	Route::get('create-blog', [
		'as' => 'create-blog', 
		'uses' => 'BlogController@getCreateBlog'
		]);

	Route::get('view-blog/{id}', [
		'as' => 'view-blog', 
		'uses' => 'BlogController@getViewBlog'
		]);

	Route::get('edit-blog/{id}', [
		'as' => 'edit-blog', 
		'uses' => 'BlogController@getEditBlog'
		]);

	Route::get('delete-blog/{id}', [
		'as' => 'delete-blog', 
		'uses' => 'BlogController@getDeleteBlog'
		]);

	Route::get('view-blog-comments/{id}', [
		'as' => 'view-blog-comments', 
		'uses' => 'BlogController@getViewBlogComments'
		]);

	Route::get('delete-blog-comment/{id}', [
		'as' => 'delete-blog-comment', 
		'uses' => 'BlogController@getDeleteBlogComments'
		]);


	//POST ROUTES

	Route::post('create-blog-post', [
		'as' => 'create-blog-post', 
		'uses' => 'BlogController@postCreateBlog'
		]);

	Route::post('edit-blog-post/{id}', [
		'as' => 'edit-blog-post', 
		'uses' => 'BlogController@postEditBlog'
		]);


});


Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'blog-category', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{
    
	//GET ROUTES

    Route::get('list-category', [
    	'as' => 'list-category', 
    	'uses' => 'BlogCategoryController@getListCategory'
    	]);

    Route::get('add-category', [
    	'as' => 'add-category', 
    	'uses' => 'BlogCategoryController@getAddCategory'
    	]);

    Route::get('edit-category/{id}', [
    	'as' => 'edit-category', 
    	'uses' => 'BlogCategoryController@getEditCategory'
    	]);

    Route::get('delete-category/{id}', [
    	'as' => 'delete-category', 
    	'uses' => 'BlogCategoryController@getDeleteCategory'
    	]);

    //POST ROUTES

    Route::post('add-category-post', [
    	'as' => 'add-category-post', 
    	'uses' => 'BlogCategoryController@postAddCategory'
    	]);

    Route::post('edit-category-post/{id}', [
    	'as' => 'edit-category-post', 
    	'uses' => 'BlogCategoryController@postEditCategory'
    	]);


});


//AJAX ROUTES
Route::get('ajax-get-search-blog', [
	'as' => 'ajax-get-search-blog', 
	'uses' => 'Modules\Blog\Http\Controllers\BlogController@getSearchBlog'
	]);	