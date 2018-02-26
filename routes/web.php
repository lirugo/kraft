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
    Route::get('/', 'ManageController@dashboard')->name('manage');
});
//EndManage route

//User route
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@profile_update')->name('profile.update');
//EndUser route

//Company route
Route::get('company/profile', 'CompanyController@profile');
Route::get('company/users', 'CompanyController@getcompanyusers');
Route::get('company/users/create', 'CompanyController@createuser');

Route::post('company/profile', 'CompanyController@changeprofile')->name('company.change');
Route::post('company/users/create', 'CompanyController@createuserpost')->name('company.users.create');
//EndCompany route

//object route
Route::group(['prefix' => 'object',
    'middleware' => 'role:distributor|worker'],
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
        Route::get('users', 'Manager\ManagerController@users')->name('manager.users');
        Route::get('distributor/{id}', 'Manager\ManagerController@distributor')->name('manager.distributor');
        Route::get('designer/{id}', 'Manager\ManagerController@designer')->name('manager.designer');
        Route::get('designer/profile/{id}', 'Manager\ManagerController@designerprofile')->name('manager.designer.profile');
        Route::get('distributor/profile/{id}', 'Manager\ManagerController@distributorprofile')->name('manager.distributor.profile');
        Route::get('distributor/users/{id}', 'Manager\ManagerController@userscompany')->name('manager.distributor.users');
        Route::get('arch', 'Manager\ManagerController@arch')->name('manager.arch');
        Route::get('objects', 'Manager\ManagerController@objects')->name('manager.objects');
        Route::get('object/show/{id}', 'Manager\ManagerController@showobject')->name('manager.object.show');
        Route::post('user/activate/{id}', 'Manager\ManagerController@activateuser')->name('manager.user.activate');
        Route::post('user/verified/{id}', 'Manager\ManagerController@verifieduser')->name('manager.user.verified');
        Route::post('object/activate/{id}', 'Manager\ManagerController@activateobject')->name('manager.object.activate');
        Route::post('object/verified/{id}', 'Manager\ManagerController@verifiedobject')->name('manager.object.verified');
    });
//manager route

//distributor route
Route::group(['prefix' => 'distributor',
    'middleware' => 'role:distributor|worker'],
    function () {
        Route::get('objects', 'Distributor\ObjectsController@objects');
        Route::get('object/show/{id}', 'Distributor\ObjectsController@objectshow')->name('object.show');
    });
//distributor route

//admin route
Route::group(['prefix' => 'admin'],
    function () {
        Route::get('/', 'Admin\AdminController@admin')->name('admin');
        Route::get('manage', 'Admin\AdminController@admin')->name('admin.manage');
        Route::get('settings', 'Admin\AdminController@settings')->name('admin.settings');

        Route::get('login', 'Admin\LoginController@showlogin')->name('admin.login');
        Route::post('login', 'Admin\LoginController@login')->name('admin.login');
        Route::get('logout', 'Admin\AdminController@logout')->name('admin.logout');

        Route::get('users/show', 'Admin\AdminController@showusers')->name('admin.users.show');

        Route::get('users/create', 'Admin\AdminController@createuser')->name('admin.users.create');
        Route::post('users/create', 'Admin\AdminController@createuserpost')->name('admin.users.create');

        //Product
            Route::get('product/upload', 'Product\ProductController@upload');
            Route::post('product/upload', 'Product\ProductController@uploadpost')->name('admin.product.upload');
        //Product

        Route::post('users/activate/{id}', 'Admin\AdminController@activateuser')->name('admin.users.activate');
        Route::post('users/delete/{id}', 'Admin\AdminController@deleteuser')->name('admin.users.delete');
        //Mode
        Route::post('settings/maintenance/off', [
            'as' => 'admin.settings.maintenance.off',
            function () {
                \Artisan::call('up');
                return redirect()->back();
        }]);
        Route::post('settings/maintenance/on', [
            'as' => 'admin.settings.maintenance.on',
            function () {
                \Artisan::call('down');
                return redirect()->back();
            }]);

    });
//admin route

//UploadController
Route::post('upload/avatar', 'UploadController@uploadavatar')->name('upload.avatar');
Route::post('upload/scan', 'UploadController@uploadscan')->name('upload.scan');
Route::post('upload/photo', 'UploadController@uploadphoto')->name('upload.photo');
Route::post('upload/report', 'UploadController@uploadreport')->name('upload.report');
//EndUploadController

//DesignerRoute
Route::get('designer/object/show', 'Designer\DesignerController@showobject');
Route::get('designer/object/show/{id}', 'Designer\DesignerController@getobject');
Route::get('designer/object/register', 'Designer\DesignerController@object');
Route::post('designer/object/register', 'Designer\DesignerController@objectpost');
//EndDesignerRoute

//WorkerRoute
Route::get('worker/objects/show', 'Worker\WorkerController@objects');
Route::get('worker/object/show/{id}', 'Worker\WorkerController@objectshow');
//WorkerRoute

//ReportRoute
Route::get('report/{id}', 'Report\ReportController@index');
Route::get('report/show/{id}', 'Report\ReportController@show');
Route::get('report/submit/{id}', 'Report\ReportController@submit');
Route::post('report/upload/{id}', 'Report\ReportController@upload')->name('report.upload');
//ReportRoute

//Cron
Route::get('routes/console', function()
{
    Artisan::queue('command:checkDateReportObject');
});
//EndCron

//Message route
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});
//EndMessage route
// Dont forget delete
Route::get('/complete', function () {
    return view('auth.complete');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('dropzone', 'HomeController@dropzone');
