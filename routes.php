<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    if (\Auth::check('user'))
        return redirect('/dashboard');
    else
        return view('front/home');
});*/

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::resource('dashboard', 'DashboardController');

Route::resource('/', 'HomeController');
Route::resource('about', 'AboutController');
Route::resource('product', 'ProductController');
Route::resource('plan', 'PlanController');
Route::resource('submitContact', 'ContactUsController@submitContact');
Route::resource('contact', 'ContactUsController');
Route::resource('accounting', 'ServiceController@accounting');
Route::resource('bookkeeping', 'ServiceController@bookkeeping');
Route::resource('taxation', 'ServiceController@taxation');
Route::resource('payroll', 'ServiceController@payroll');
Route::resource('hosting', 'ServiceController@hosting');
Route::resource('support', 'ServiceController@support');
Route::resource('quicken', 'ServiceController@quicken');
Route::resource('service', 'ServiceController');
Route::resource('desktop-solution', 'ServiceController@desktopSolution');

Route::post('user/checkEmail', 'UserController@checkEmail');
Route::resource('user', 'UserController');
