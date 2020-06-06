<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/remove-global/{type}', array(
	'as'	=>	'remove-global',
	'uses'	=>	'ConfigurationController@removeGlobal'));

//FRONTEND ABOUT US, BLOG AND PACKAGE ROUTES

Route::get('/', [
	'as' => 'frontend-home', 
	'uses' => 'FrontendController@getHome'
	]);

Route::get('/package/itinerary/{package_name}',[
	'as' => 'package-details', 
	'uses' => 'FrontendController@getPackageDetails'
]);

Route::get('/package/{package_name}',[
	'as' => 'package-details-without-itinerary', 
	'uses' => 'FrontendController@getPackageDetailsWithoutItinerary'
]);	

Route::get('/frontend-about/{title}', [
	'as' => 'frontend-about', 
	'uses' => 'FrontendController@getAboutUs'
]);

Route::get('/blog',[
	'as' => 'list-blog-frontend', 
	'uses' => 'FrontendController@getListBlogs'
]);

Route::get('/blog/{title}',[
	'as' => 'frontend-blog-details', 
	'uses' => 'FrontendController@getBlogDetails'
]);

Route::get('/ajax-get-search-blog-frontend',[
	'as' => 'ajax-get-search-blog-frontend', 
	'uses' => 'FrontendController@getSearchBlog'
]);

Route::get('/search-frontend-packages', [
	'as' => 'search-frontend-packages', 
	'uses' => 'FrontendController@getSearchPackages'
]);

// Route::get('test',[
// 	'as' => 'test', 
// 	'uses' => 'FrontendController@getPackageName'
// ]);

Route::get('/download-package-file',[
	'as' => 'download-package-file', 
	'uses' => 'FrontendController@getDownloadPackageFile'
]);

Route::get('/search-ideal-trip',[
	'as' => 'search-ideal-trip', 
	'uses' => 'FrontendController@getSearchIdealTrip'
]);

//

//FRONTEND AND BACKEND BOOKING ROUTES

Route::get('/book-package/{package_name}', [
	'as' => 'book-package', 
	'uses' => 'BookingController@getbookPackage'
]);

Route::post('/post-book-package',[
	'as' => 'post-book-package', 
	'uses' => 'BookingController@postBookPackage'
]);

Route::get('/list-bookings',[
	'as' => 'list-bookings', 
	'uses' => 'BookingController@getListBookings'
])->middleware('CustomAuthCheck');

Route::get('/delete-booking/{id}',[
	'as' => 'delete-booking', 
	'uses' => 'BookingController@getDeleteBookings'
])->middleware('CustomAuthCheck');

Route::get('/view-booking/{id}',[
	'as' => 'view-booking', 
	'uses' => 'BookingController@getViewBooking'
])->middleware('CustomAuthCheck');

//

// MAIL ROUTES
//Route::get('send-mail', 'MailController@sendMail');

Route::post('send-mail',[
	'as' => 'send-mail', 
	'uses' => 'MailController@sendMailToFriend'
]);
//



// FRONTEND + BACKEND PACKAGE REVIEW
Route::post('/package-review',[
	'as' => 'package-review', 
	'uses' => 'ReviewController@postPackageReview'
]);

Route::get('/list-package-reviews',[
	'as' => 'list-package-reviews', 
	'uses' => 'ReviewController@getListReviews'
])->middleware('CustomAuthCheck');

Route::get('/view-review/{id}',[
	'as' => 'view-review', 
	'uses' => 'ReviewController@getViewReview'
])->middleware('CustomAuthCheck');

Route::get('/delete-review/{id}',[
	'as' => 'delete-review', 
	'uses' => 'ReviewController@getDeleteReview'
])->middleware('CustomAuthCheck');
//



//FRONTEND + BACKEND ENQUIRY ROUTES

Route::get('/enquiry-now',[
	'as' => 'enquiry-now', 
	'uses' => 'EnquiryController@getEnquiryNow'
]);

Route::post('/enquiry-post',[
	'as' => 'enquiry-post', 
	'uses' => 'EnquiryController@postEnquiryNow'
]);

Route::get('/list-enquiry',[
	'as' => 'list-enquiry', 
	'uses' => 'EnquiryController@getListEnquiry'
])->middleware('CustomAuthCheck');

Route::get('/view-enquiry/{id}',[
	'as' => 'view-enquiry', 
	'uses' => 'EnquiryController@getViewEnquiry'
])->middleware('CustomAuthCheck');

Route::get('/delete-enquiry/{id}',[
	'as' => 'delete-enquiry', 
	'uses' => 'EnquiryController@getDeleteEnquiry'
])->middleware('CustomAuthCheck');
//

//FRONTEND CONTACT US ROUTES

Route::get('/contact-us',[
	'as' => 'contact-us', 
	'uses' => 'ContactController@getContactUs'
]);

//

//AJAX ROUTES//

Route::get('child-packages-from-select-box',[
	'as' => 'child-packages-from-select-box', 
	'uses' => 'FrontendController@getChildPackages'
]);
	
//

