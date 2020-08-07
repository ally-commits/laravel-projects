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

Route::get('/user-dashboard', 'HomeController@index')->name('user-dashboard');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.home');
    Route::post('/logout', 'AdminController@logout')->name('admin.logout');
    Route::get('/job-r', 'AdminController@jobs');
    Route::get('/event-r', 'AdminController@events');
});

Route::get('/job-registration', 'JobRegister@index')->middleware('auth');
Route::post('/job-registration', 'JobRegister@store')->middleware('auth');


Route::get('/event-registration', 'EventController@index')->middleware('auth');
Route::post('/event-registration', 'EventController@store')->middleware('auth');