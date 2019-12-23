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
});
define('profile_img', 'public/frontend/profile_img');


Route::match(['get','post'],'/admin','admin\AdminController@Login');
Route::match(['get','post'],'/forgot-password','admin\AdminController@forgotPassword');
Route::match(['get','post'],'/admin-reset-password/{id}/{random_number}', 'admin\AdminController@adminresetPassword');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::match(['get','post'],'/dashboard','admin\AdminController@Dashboard');
	Route::match(['get','post'],'/logout','admin\AdminController@Logout');
	Route::match(['get','post'],'/profile','admin\AdminController@Profile');
	Route::match(['get','post'],'/check-current-password','admin\AdminController@checkCurrentPassword');

	//======================================User Management Start==================================

	Route::match(['get','post'],'/users','admin\UserManagementController@Users');	
	Route::match(['get','post'],'/ajax-users','admin\UserManagementController@ajaxUsers');
});