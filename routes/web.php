<?php

use Illuminate\Support\Facades\Route;

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

/**
 * ADMIN ROUTES
 */
Route::group(['middleware' => ['auth']], function(){
    /**
     * Dashboard routes
     */
    Route::get('dashboard','DashboardController@index');

    /**
     * Users routes
     */
    Route::get('users/manager','UsersController@index');
    Route::get('users','UsersController@users');
    Route::get('user/create','UsersController@create');
    Route::get('user/{user:username}','UsersController@show');
    Route::get('password-reset-otp/{user:username}','UsersController@passwordResetOTP');

    /**
     * Access control routes
     */
    Route::group([], function(){
        Route::get('access_control/manager','AccessControlController@index');
    });

    /**
     * Services routes
     */
    Route::group([], function(){
        Route::get('services/manager','ServicesController@index');
    });

    /**
     * Mail routes
     * NOTE : has routes outside admin route group
     */
    // Route::get('send-otp-mail/{email}/{otp}/{token}','OtpController@otpEmail')->name('send-otp-mail');
});

Auth::routes();
Route::get('/logout/{origin?}', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
