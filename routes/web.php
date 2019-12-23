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
});
