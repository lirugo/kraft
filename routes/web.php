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
Route::get('/home', 'HomeController@index');

//Language route
Route::post('/language', [
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index'
]);
//EndLanguage route

//Registration route
Auth::routes();
Route::get('register/user', 'Auth\RegisterController@getRegisterUser');
Route::post('register/user', 'Auth\RegisterController@createRegisterUser')->name('register.user');

Route::get('register/company', 'Auth\RegisterCompanyController@getRegisterCompany');
Route::post('register/company', 'Auth\RegisterCompanyController@createRegisterCompany')->name('register.company');
//End Registration route

//Manage route
Route::group(['prefix' => 'manage',
    'middleware' => 'role:superadministrator|administrator|distributor|worker|manager|top-manager'],
    function () {
    Route::get('dashboard', 'ManageController@dashboard')->name('manage.dashboard');
});
//EndManage route

//User route
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@profile_update')->name('profile.update');
//EndUser route

//Company route
Route::get('company/profile', 'CompanyController@profile');
Route::get('company/users', 'CompanyController@getcompanyusers');

Route::post('company/profile', 'CompanyController@changeprofile')->name('company.change');
//EndCompany route


// Dont forget delete
Route::get('/complete', function () {
    return view('auth.complete');
});
Route::get('/test', function () {
    return view('test');
});