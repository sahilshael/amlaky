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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/','HomeController@index');
Route::match(['get','post'],'/signup-cards','HomeController@signupCards');
Route::match(['get','post'],'/signup','UserController@signup');
Route::match(['get','post'],'/verify-otp','UserController@verifyOtp');
Route::match(['get','post'],'/login','UserController@login');
Route::match(['get','post'],'/check-email','UserController@checkEmail');

Route::group(['middleware'=>['userlogin']],function(){
	Route::match(['get','post'],'/landlord-dashboard','UserController@landlordDashboard');
	Route::match(['get','post'],'/logout','UserController@logout');
	Route::match(['get','post'],'/landlord-profile','UserController@landlordProfile');
	Route::match(['get','post'],'/landlord-editprofile','UserController@landlordEditProfile');
	Route::match(['get','post'],'/landlord-change-password','UserController@landlordResetPassword');
	Route::match(['get','post'],'/landlord-check-password','UserController@landlordCurrentPassword');
	Route::match(['get','post'],'/landlord-add-property','UserController@landlordAddProperty');
	Route::match(['get','post'],'/get-property-subTypes','UserController@getPropertySubTypes');

});
define('profile_img', 'public/frontend/profile_img');


Route::match(['get','post'],'/admin','admin\AdminController@Login');
Route::match(['get','post'],'/forgot-password','UserController@forgotPassword');
Route::match(['get','post'],'/reset-password/{id}/{random_number}', 'UserController@resetPassword');

Route::match(['get','post'],'admin/forgot-password','admin\AdminController@forgotPassword');
Route::match(['get','post'],'admin/reset-password/{id}/{random_number}', 'admin\AdminController@adminresetPassword');


Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::match(['get','post'],'/dashboard','admin\AdminController@Dashboard');
	Route::match(['get','post'],'/cities','admin\AdminController@cities');
	Route::match(['get','post'],'/logout','admin\AdminController@Logout');
	Route::match(['get','post'],'/profile','admin\AdminController@Profile');
	Route::match(['get','post'],'/check-current-password','admin\AdminController@checkCurrentPassword');

	//======================================User Management Start================================

	Route::match(['get','post'],'/users','admin\UserManagementController@Users');	
	Route::match(['get','post'],'/ajax-users','admin\UserManagementController@ajaxUsers');

	Route::match(['get','post'],'/select-user-delete','admin\UserManagementController@selectUserDelete');
	Route::match(['get','post'],'/select-user-active','admin\UserManagementController@selectUserStatusActive');
	Route::match(['get','post'],'/select-user-inactive','admin\UserManagementController@selectUserStatusInactive');
	//======================================User Management Ends==================================

	
	//======================================Property Management Starts============================

	Route::match(['get','post'],'/property-types','admin\PropertyController@propertyTypes');	
	Route::match(['get','post'],'/ajax-property-types','admin\PropertyController@ajaxPropertyTypes');
	Route::match(['get','post'],'/property-types-active','admin\PropertyController@propertyTypesActive');
	Route::match(['get','post'],'/property-types-inactive','admin\PropertyController@propertyTypesInactive');
	Route::match(['get','post'],'/property-types-delete','admin\PropertyController@propertyTypesDelete');
	Route::match(['get','post'],'/add-property-type','admin\PropertyController@addPropertyType');
	Route::match(['get','post'],'/edit-property-type/{id}','admin\PropertyController@editPropertyType');
	Route::match(['get','post'],'/check-property-type','admin\PropertyController@checkPropertyType');
	Route::match(['get','post'],'/check-edit-property-type/{id}','admin\PropertyController@checkEditPropertyType');

	//=====================================Property Sub Type======================================
	Route::match(['get','post'],'/property-sub-type/{id}','admin\PropertyController@propertySubTypes');	
	Route::match(['get','post'],'/ajax-property-sub-types/{id}','admin\PropertyController@ajaxPropertySubTypes');
	Route::match(['get','post'],'/add-property-sub-type/{id}','admin\PropertyController@addPropertySubType');
	Route::match(['get','post'],'/edit-property-sub-type/{id}','admin\PropertyController@editPropertySubType');
	Route::match(['get','post'],'/check-property-sub-type','admin\PropertyController@checkPropertySubType');
	Route::match(['get','post'],'/check-edit-property-sub-type/{id}','admin\PropertyController@checkEditPropertySubType');

	//======================================Property Management Ends==============================
});