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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'contractor'], function () {
    Route::get('login', 'Contractor\Auth\LoginController@showcontractorLoginForm')->name('contractor_login');
    Route::post('login', 'Contractor\Auth\LoginController@login')->name('contractor_login_post');
    Route::post('logout', 'Contractor\Auth\LoginController@logout')->name('contractor_logout');

    // Registration Routes...
    Route::get('register', 'Contractor\Auth\RegisterController@showRegistrationForm')->name('contractor_register');
    Route::post('register', 'Contractor\Auth\RegisterController@register')->name('contractor_register_post');

    // Password Reset Routes...
    //Route::get('password/reset', 'Contractor\Auth\ForgotPasswordController@showLinkRequestForm')->name('contractor_password_request');
    //Route::post('password/email', 'Contractor\Auth\ForgotPasswordController@sendResetLinkEmail')->name('contractor_password_email');
    //Route::get('password/reset/{token}', 'Contractor\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    //Route::post('password/reset', 'Contractor\Auth\ResetPasswordController@reset');

    Route::get('home', 'Contractor\HomeController@index')->name('contractor_home');
});