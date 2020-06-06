<?php

Route::group(['middleware' => ['web', 'CustomAuthCheck'], 'prefix' => 'configurations', 'namespace' => 'Modules\Configurations\Http\Controllers'], function()
{
	//GET ROUTES

   	Route::get('list-youtube-videos', [
   		'as' => 'list-youtube-videos', 
   		'uses' => 'ConfigurationsController@getListYoutubeVideos'
   		]) ;

   	Route::get('view-frontend-youtube-video', [
   		'as' => 'view-frontend-youtube-video', 
   		'uses' => 'ConfigurationsController@getYoutubeVideoFrontend'
   		]);	

   	Route::get('map-view-settings', [
   		'as' => 'map-view-settings', 
   		'uses' => 'ConfigurationsController@getMapViewSettings'
   		]);

      Route::get('facebook-widget-view-settings', [
         'as' => 'facebook-widget-view-settings', 
         'uses' => 'ConfigurationsController@getFacebookWidgetViewSettings'
         ]);

      Route::get('update-general-settings', [
         'as' => 'update-general-settings', 
         'uses' => 'ConfigurationsController@getUpdateGeneralSettings'
         ]);


      Route::get('update-seo-settings', [
         'as' => 'update-seo-settings', 
         'uses' => 'ConfigurationsController@getUpdateSEOSettings'
         ]);

   	//POST ROUTES

   	Route::post('update-youtube-config-settings', [
   		'as' => 'update-youtube-config-settings', 
   		'uses' => 'ConfigurationsController@postUpdateYoutubeConfigSettings'
   		]);

   	Route::post('update-map-config-settings', [
   		'as' => 'update-map-config-settings', 
   		'uses' => 'ConfigurationsController@postUpdateMapConfigSettings'
   		]);

      Route::post('update-facebook-widget-config-settings', [
         'as' => 'update-facebook-widget-config-settings', 
         'uses' => 'ConfigurationsController@postUpdateFacebookConfigSettings'
         ]);

      Route::post('update-general-settings-post', [
         'as' => 'update-general-settings-post', 
         'uses' => 'ConfigurationsController@postUpdateGeneralSettings'
         ]);

      Route::post('update-seo-settings-post', [
         'as' => 'update-seo-settings-post', 
         'uses' => 'ConfigurationsController@postUpdateSEOSettings'
         ]);
});
