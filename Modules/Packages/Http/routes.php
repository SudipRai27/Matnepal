<?php

Route::group(['middleware' => ['web','CustomAuthCheck'], 'prefix' => 'packages', 'namespace' => 'Modules\Packages\Http\Controllers'], function()
{

/////PACKAGE ROUTES


	//GET ROUTES

    Route::get('/list-packages', [
    	'as' => 'list-packages', 
    	'uses' => 'PackagesController@getListPackage'
    ]);

    Route::get('/create-packages', [
    	'as' => 'create-packages', 
    	'uses' => 'PackagesController@getCreatePackage'
    ]);

    Route::get('list-package-tree-view', [
    	'as' => 'list-package-tree-view', 
    	'uses' => 'PackagesController@getListPackageTreeView'
    ]);

    Route::get('edit-package/{id}', [
    	'as' => 'edit-package', 
    	'uses' => 'PackagesController@getEditPackage'

    ]);	
    

    Route::get('view-package/{id}', [
    	'as' => 'view-package', 
    	'uses' => 'PackagesController@getViewPackage'
    ]);

    Route::get('delete-package/{id}', [
    	'as' => 'delete-package', 
    	'uses' => 'PackagesController@getDeletePackage'
    ]);
    

    //POST ROUTES

    Route::post('create-packages-post', [
    	'as' => 'create-packages-post', 
    	'uses' => 'PackagesController@PostCreatePackages'
    ]);

    Route::post('update-packages-post/{id}', [
    	'as' => 'update-packages-post', 
    	'uses' => 'PackagesController@postUpdatePackage'
    ]);
///////


//////PACKAGE DETAIL ROUTES

    //GET ROUTES
    Route::get('create-package-details', [
        'as' => 'create-package-details', 
        'uses' => 'PackagesDetailController@getCreatePackageDetails'
    ]);

    Route::get('list-package-details', [
        'as' => 'list-package-details', 
        'uses' => 'PackagesDetailController@getListPackageDetails'
    ]);

    Route::get('view-package-details/{id}',[
        'as' => 'view-package-details', 
        'uses' => 'PackagesDetailController@getViewPackageDetails'

    ]);


    Route::get('edit-package-details/{id}', [
        'as' => 'edit-package-details',  
        'uses' => 'PackagesDetailController@getEditPackageDetails'
    ]);

    Route::get('delete-package-gallery-image/{id}', [
        'as' => 'delete-package-gallery-image', 
        'uses' => 'PackagesDetailController@getDeletePackageGalleryImage'
    ]);

    Route::get('get-package-details-file/{file_name}', [
        'as' => 'get-package-details-file', 
        'uses' => 'PackagesDetailController@getPackageDetailsFile'
    ]);

    Route::get('delete-package-details/{id}', [
        'as' => 'delete-package-details', 
        'uses' => 'PackagesDetailController@getDeletePackageDetails'
    ]);

    Route::get('delete-package-dates/{id}',[
        'as' => 'delete-package-dates', 
        'uses' => 'PackagesDetailController@getDeletePackageDates'
    ]);

    Route::get('delete-package-group-discount/{id}', [
        'as' => 'delete-package-group-discount', 
        'uses' => 'PackagesDetailController@getDeletePackageGroupDiscount'
    ]);

    Route::get('delete-package-faq/{id}',[
        'as' => 'delete-package-faq', 
        'uses' => 'PackagesDetailController@getDeletePackageFaq'
    ]);

    //POST ROUTES
    Route::post('create-packages-details-post', [
        'as' => 'create-packages-details-post', 
        'uses' => 'PackagesDetailController@postCreatePackageDetails'
    ]);

    Route::post('edit-packages-details-post/{id}', [
        'as' => 'edit-packages-details-post', 
        'uses' => 'PackagesDetailController@postEditPackageDetails'
    ]);

});

////


//AJAX ROUTES

Route::get('/ajax-get-search-package',[
    'as' => 'ajax-get-search-package', 
    'uses' => 'Modules\Packages\Http\Controllers\PackagesController@getSearchPackage'
]);


Route::get('/ajax-get-search-package-details',[
    'as' => 'ajax-get-search-package-details', 
    'uses' => '\Modules\Packages\Http\Controllers\PackagesDetailController@getSearchPackageDetails'
]); 
///