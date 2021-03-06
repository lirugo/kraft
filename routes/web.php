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

use App\Events\MsgPosted;
use App\ProductKraft;
use Illuminate\Support\Facades\Mail;

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');

//Language route
Route::get('/language', [
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
Route::post('profile/password/update', 'UserController@updatePassword')->name('profile.password.update');
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
        Route::get('objects/create', 'Manager\ManagerController@create');
        Route::post('objects/create', 'Manager\ManagerController@postCreate')->name('manager.objects.create');
        Route::get('object/show/{id}', 'Manager\ManagerController@showobject')->name('manager.object.show');
        Route::get('moderation', 'Manager\ModerationController@index');
        Route::get('moderation/company', 'Manager\ModerationController@company');
        Route::get('moderation/objects', 'Manager\ModerationController@objects');
        Route::get('moderation/company/users', 'Manager\ModerationController@companyusers');
        Route::get('moderation/company/orders', 'Manager\ModerationController@companyorders');
        Route::post('moderation/company/orders/{repeatId}', 'Manager\ModerationController@companyordersPost');
        Route::post('moderation/company/users/activate/{id}', 'Manager\ModerationController@activate')->name('moderation.company.users.activate');
        Route::post('moderation/company/profile/{id}', 'Manager\ModerationController@companypost')->name('moderation.company.profile');
        Route::post('user/activate/{id}', 'Manager\ManagerController@activateuser')->name('manager.user.activate');
        Route::post('user/verified/{id}', 'Manager\ManagerController@verifieduser')->name('manager.user.verified');
        Route::post('object/activate/{id}', 'Manager\ManagerController@activateobject')->name('manager.object.activate');
        Route::post('object/verified/{id}', 'Manager\ManagerController@verifiedobject')->name('manager.object.verified');

//Discount
        Route::get('distributor/discount/{id}', 'Manager\DiscountController@index');
        Route::post('distributor/discount/update{id}', 'Manager\DiscountController@update')->name('manager.distributor.discount.update');
//EndDiscount

        //Change manger
        Route::post('object/show/{id}/transfer/distributor', 'Manager\ManagerController@transferToDistributor')->name('manager.object.show.transfer.distributor');
        Route::post('object/show/{id}/transfer', 'Manager\ManagerController@transferTo')->name('manager.object.show.transfer');
    });
//manager route

Route::post('/object/{id}/request/delete', 'Object\ObjectController@requestOnDeleting');
Route::post('/object/{id}/delete', 'Object\ObjectController@delete');
Route::post('/object/{id}/delete/top', 'Object\ObjectController@deleteTop');

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
        Route::get('product', 'Admin\ProductController@index');
        Route::get('product/csv/get', 'Admin\ProductController@getProductsCSV');
        Route::post('product/update/{id}', 'Admin\ProductController@update')->name('admin.product.update');
        Route::post('product/csv/update', 'Admin\ProductController@updateCSV')->name('admin.product.csv.update');
        //Product
        //Distributor
        Route::get('distributor', 'Admin\DistributorController@index');
        Route::post('distributor/update/{id}', 'Admin\DistributorController@update')->name('admin.distributor.update');
        //Distributor

        //News
            Route::get('news/create', 'Admin\NewsController@create');
            Route::post('news/create', 'Admin\NewsController@createpost')->name('admin.news.create');
        //News
        //Calc
        Route::get('calc', 'Admin\CalcController@index');
        Route::get('calc/tprofile', 'Admin\CalcController@tprofile');
        Route::get('calc/grilyato', 'Admin\CalcController@grilyato');
        Route::get('calc/cube', 'Admin\CalcController@cube');
        Route::get('calc/led', 'Admin\CalcController@led');
        Route::post('calc/tprofile/update', 'Admin\CalcController@tprofileupdate')->name('admin.calc.tprofile.update');
        Route::post('calc/grilyato/update', 'Admin\CalcController@grilyatoupdate')->name('admin.calc.grilyato.update');
        Route::post('calc/tprofile/upload', 'Admin\CalcController@tprofileuploadpost')->name('admin.calc.tprofile.upload');
        Route::get('calc/tprofile/upload', 'Admin\CalcController@tprofileupload');
        Route::post('calc/cube/update', 'Admin\CalcController@cubeupdate')->name('admin.calc.cube.update');
        Route::post('calc/led/update', 'Admin\CalcController@ledupdate')->name('admin.calc.led.update');
        //EndCalc

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

//OrderCalc
Route::get('/order/light', 'Order\OrderController@light');
Route::get('/order/history', 'Order\OrderController@historyStock');
Route::get('/order/pdf/{order_id}', 'Order\OrderController@pdf');
Route::get('/order/stock/{order_id}', 'Order\OrderController@showStock');
Route::get('/order/{id}/select/', 'Order\OrderController@select');
Route::get('/order/{id}/select/{order_id}', 'Order\OrderController@selectorder');
Route::post('/order/delete/{order_id}', 'Order\OrderController@deleteStockOrder')->name('order.stock.delete');
Route::post('/order/move/{order_id}', 'Order\OrderController@moveToDistributor')->name('order.stock.move');
Route::delete('/order/{id}/select/{order_id}/delete', 'Order\OrderController@deleteorder')->name('order.select.delete');
Route::post('/order/{id}/update', 'Order\OrderController@update');
Route::get('/order/stock', 'Order\StockController@show');
Route::get('/order/{id}', 'Order\OrderController@index');
Route::get('/order', 'Order\OrderController@create');
Route::get('/order/show/{id}', 'Order\OrderController@show');
Route::post('/select/delete/{id}', 'Order\OrderController@deletePartOrder')->name('select.delete');

Route::post('/order/light/vendor', 'Order\OrderController@lightvendor');
Route::post('/order/tprofile/vendor', 'Order\OrderController@tprofilevendor')->name('order.tprofile.vendor');
Route::post('/order/grilyato/vendor', 'Order\OrderController@grilyatovendor');
Route::post('/order/rail/vendor', 'Order\OrderController@railvendor');
Route::post('/order/common/save/{id}', 'Order\OrderController@common_save')->name('order.common.save');

//Invoice Route
Route::post('/order/invoice/{order_id}/send', 'Order\InvoiceController@send')->name('order.invoice.send');
//EndInvoice Route
//EndOrderCalc

//Message route
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});
//EndMessage route

//TopManager
Route::get('/topmanager/objects', 'TopManager\ObjectsController@index');
Route::get('/topmanager/distributor/update', 'TopManager\TopManagerController@updateDistr');
Route::post('/topmanager/distributor/update', 'TopManager\TopManagerController@updateDistrUpdate');

Route::get('/managers', 'TopManager\ManagersController@index');
Route::get('/managers/{id}', 'TopManager\ManagersController@show');
Route::get('/distributors', 'TopManager\DistributorsController@index');
//EndTopManager

//ContactController
Route::get('/contact/send', 'ContactController@send')->name('contact.send');
Route::post('/contact/send', 'ContactController@send')->name('contact.send');
Route::post('/order/send/{order_id}', 'ContactController@order')->name('order.send');
//EndContactController


//News
Route::get('/news', 'News\NewsController@index');
//End News

// Dont forget delete
Route::get('/complete', function () {
    return view('auth.complete');
});
//Route::get('/test', function () {
//    return view('test');
//});
Route::get('dropzone', 'HomeController@dropzone');

//Chat
//Route::get('/chat', function(){
//    return view('chat');
//})->middleware('auth');
//Route::get('/messages',  function (){
//    return App\Msg::with('user')->get();
//})->middleware('auth');
//Route::post('/messages',  function (){
//    // Store the new msg
//    $user = Auth::user();
//
//    $message = $user->msgs()->create([
//        'message' => request()->get('message')
//    ]);
//    // Announce that a new message has been posted
//    broadcast(new MsgPosted($message, $user))->toOthers();
//    return ['status' => 'OK'];
//})->middleware('auth');

//Chat for object
Route::get('/object/{objectId}/chat', 'Chat\ObjectController@chat');
Route::get('/object/{objectId}/messages', 'Chat\ObjectController@messages');
Route::post('/object/{objectId}/messages', 'Chat\ObjectController@postmessages');

//Notification Route
Route::get('/getNotif', 'Notification\NotificationController@getNotif');
Route::post('/delNotif', 'Notification\NotificationController@delNotif');

Route::get('testNotif', 'Notification\NotificationController@index');


Route::get('/test', 'TestController@index');
Route::get('/test2', 'TestController@test2');


//AUTHY ROUTE
Route::get('/auth/token', 'Auth\AuthTokenController@getToken');
Route::post('/auth/token', 'Auth\AuthTokenController@postToken')->name('auth.token');
Route::get('/auth/token/resend', 'Auth\AuthTokenController@getResend')->name('auth.token');

//SHOP
Route::get('/stock', 'Order\StockController@index');
Route::get('/shop', 'Shop\ShopController@index');
Route::get('/shop/ok', 'Shop\ShopController@ok');
Route::get('/shop/cart', 'Shop\ShopController@cart');
Route::get('/shop/clear', 'Shop\ShopController@clear');
Route::get('/shop/show', 'Shop\ShopController@show');
Route::post('/shop/save', 'Shop\ShopController@save')->name('shop.save');
Route::post('/shop/add/{id}', 'Shop\ShopController@add')->name('shop.add');
Route::post('/shop/delete/{id}', 'Shop\ShopController@destroy')->name('shop.cart.delete');


//HELP PAGE
Route::get('/help', 'Help\HelpController@index');
Route::get('/help/admin', 'Help\HelpController@admin');
Route::get('/help/user', 'Help\HelpController@user');
Route::get('/help/newobject', 'Help\HelpController@newObject');
Route::get('/help/regobject', 'Help\HelpController@regObject');
Route::get('/help/order', 'Help\HelpController@order');

Route::get('/order/download/{orderId}', 'UploadController@downloadOrder');
//Request on repeat invoice order
Route::get('/order/request/{orderId}/repeatInvoiceOrder', 'Order\OrderController@repeatInvoiceOrder');



Route::get('/test/email', function (){
    $manager = \App\User::first();
    $company = \App\Company::first();
    $object = \App\Company::first();
        Mail::send('emails.notification', array('objectName' => $object->name, 'companyName' => $company->companyname), function($message) use ($manager)
        {
            $message->from(env('MAIL_USERNAME'));
            $message->to('it@iib.com.ua', 'No-Replay')->subject('Kraft Notification');
        });
    dd('OK');
});


