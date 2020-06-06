<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'testimonial', 'namespace' => 'Modules\Testimonial\Http\Controllers'], function()
{
    //GET ROUTES

    Route::get('list-testimonial', [
    	'as' => 'list-testimonial', 
    	'uses' => 'TestimonialController@getListTestimonial'
    	]);


    Route::get('add-testimonial', [
    	'as' => 'add-testimonial', 
    	'uses' => 'TestimonialController@getCreateTestimonial'
    	]);

    Route::get('edit-testimonial/{id}', [
    	'as' => 'edit-testimonial',  
    	'uses' => 'TestimonialController@getEditTestimonial'
    	]);

    Route::get('delete-testimonial/{id}', [
    	'as' => 'delete-testimonial', 
    	'uses' => 'TestimonialController@getDeleteTestimonial'
    	]);


    Route::get('view-testimonial/{id}', [
    	'as' => 'view-testimonial', 
    	'uses' => 'TestimonialController@getViewTestimonial'
    	]);

    //POST ROUTES

    Route::post('create-testimonial-post',  [
    	'as' => 'create-testimonial-post', 
    	'uses' => 'TestimonialController@postCreateTestimonial'
    	]);


    Route::post('edit-testimonial-post/{id}', [
    	'as' => 'edit-testimonial-post', 
    	'uses' => 'TestimonialController@postEditTestimonial'
    	]);

});
