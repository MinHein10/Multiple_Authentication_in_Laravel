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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Admin Routes
Route::prefix('admins')->group(function () {
    Route::get('/','Users\Admin\AdminController@index')->name('admin.dashboard');

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/register','Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register','Auth\AdminRegisterController@register')->name('admin.register.submit');

});

Route::prefix('employees')->group(function () {
    Route::get('/','Users\Staff\StaffController@index')->name('staff.dashboard');

    Route::get('/login','Auth\StaffLoginController@showLoginForm')->name('staff.login');
    Route::post('/login','Auth\StaffLoginController@login')->name('staff.login.submit');

    Route::get('/register','Auth\StaffRegisterController@showRegisterForm')->name('staff.register');
    Route::post('/register','Auth\StaffRegisterController@register')->name('staff.register.submit');

});



