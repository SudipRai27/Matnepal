<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'] , 'prefix' => 'messages', 'namespace' => 'Modules\Messages\Http\Controllers'], function()
{
    Route::get('/contact-messages', [
    	'as' => 'contact-messages', 
    	'uses' => 'MessagesController@getContactMessages'
    	]);

    Route::get('/view-contact-message/{id}', [
    	'as' => 'view-contact-message', 
    	'uses' => 'MessagesController@getViewContactMessage'
    	]);

    Route::get('/delete-contact-message/{id}', [
    	'as' => 'delete-contact-message', 
    	'uses' => 'MessagesController@getDeleteMessage'
    	]);

    Route::get('/enroll-message', [
    	'as' => 'enroll-message', 
    	'uses' => 'MessagesController@getListEnrollMessage'
    	]);

    Route::get('/view-enroll-message/{id}', [
    	'as' => 'view-enroll-message', 
    	'uses' => 'MessagesController@getViewEnrollMessage'
    	]);

    Route::get('/delete-enroll-message/{id}', [
    	'as' => 'delete-enroll-message', 
    	'uses' => 'MessagesController@getDeleteEnrollMessage'
    	]);

    Route::get('/instructor-message', [
    	'as' => 'instructor-message', 
    	'uses' => 'MessagesController@getInstructorMessage'
    	]);

    Route::get('download-instructor-cv/{id}', [
    	'as' => 'download-instructor-cv', 
    	'uses' => 'MessagesController@getDownloadCV'
    	]);

    Route::get('delete-instructor-message/{id}', [
    	'as' => 'delete-instructor-message', 
    	'uses' => 'MessagesController@getDeleteInstructorMessage'
    	]);
});

