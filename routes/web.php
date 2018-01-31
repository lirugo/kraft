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

Route::get('register/user', 'Auth\RegisterController@getRegisterUser');
Route::post('register/user', 'Auth\RegisterController@createRegisterUser')->name('register.user');
Route::get('register/company', 'Auth\RegisterCompanyController@getRegisterCompany');
Route::post('register/company', 'Auth\RegisterCompanyController@createRegisterCompany')->name('register.company');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'manage', 'middleware' => 'role:superadministrator'], function () {
    Route::get('dashboard', 'ManageController@dashboard')->name('manage.dashboard');
});

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@profile_update')->name('profile.update');





// Dont forget delete
Route::get('/complete', function () {
    return view('auth.complete');
});
Route::get('/test', function () {
    return view('test');
});