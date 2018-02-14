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
    'middleware' => 'role:superadministrator|administrator|distributor|worker|manager|top-manager|designer'],
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

//object route
Route::group(['prefix' => 'object',
    'middleware' => 'role:distributor'],
    function () {
        Route::get('show', 'Object\ObjectController@show')->name('object.show');
        Route::get('register', 'Object\ObjectController@register')->name('object.register');
        Route::post('register', 'Object\ObjectController@postregister')->name('object.register');
    });
//object route

//manager route
Route::group(['prefix' => 'manager',
    'middleware' => 'role:manager|top-manager'],
    function () {
        Route::get('users', 'Manager\ManagerController@users')->name('manger.users');
        Route::get('objects', 'Manager\ManagerController@objects')->name('manger.objects');

        Route::post('user/activate/{id}', 'Manager\ManagerController@activateuser')->name('manger.user.activate');
        Route::post('user/verified/{id}', 'Manager\ManagerController@verifieduser')->name('manger.user.verified');
    });
//manager route

//UploadController
Route::post('upload/avatar', 'UploadController@uploadavatar')->name('upload.avatar');
Route::post('upload/scan', 'UploadController@uploadscan')->name('upload.scan');
//EndUploadController

// Dont forget delete
Route::get('/complete', function () {
    return view('auth.complete');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('dropzone', 'HomeController@dropzone');
