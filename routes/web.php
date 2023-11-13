<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PolicyController;
use FontLib\Table\Type\name;
use App\Events\messageEvent;
use App\Events\PusherBroadcast;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    return view('auth.login');
});
Route::get('/reset', function () {
    return view('auth.passwords.reset');
});

Auth::routes();
/*------------------------------------Dashboard------------------------------------*/


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home.index');
    // Route::get('/home', 'HomeController@index')->name('home');

    /*------------------------------------Client------------------------------------*/
    Route::get('/view/{id}', 'ClientController@ClientView')->name('client.view');
    Route::get('/clients', 'ClientController@clients')->name('client.clients');
    Route::get('/createClient', 'ClientController@createClient')->name('client.clienttype');
    Route::post('/createClient', 'ClientController@step1')->name('client.step1post');
    Route::get('/soleproprietor', 'ClientController@step2a')->name('client.soleproprietor');
    Route::post('/proprietor', 'ClientController@step2');
    Route::get('/soleproprietor/{id}', 'ClientController@getsole')->name('client.soleupdate');
    Route::put('/soleproprietor/{id}', 'ClientController@updateSole');
    Route::get('/partnership', 'ClientController@step3')->name('client.partnership');
    Route::post('/partnership', 'ClientController@step3process');
    Route::get('/partnership/{id}', 'ClientController@getpartner')->name('client.partnerupdate');
    Route::put('/partnership/{id}', 'ClientController@updatePartner');
    Route::get('/limited', 'ClientController@step4')->name('client.limited');
    Route::post('/limited', 'ClientController@step4process');
    Route::put('/limited/{id}', 'ClientController@getlimited')->name('client.limitedupdate');
    Route::put('/limited/{id}', 'ClientController@updateLimited');
    Route::get('/newSole', 'ClientController@newCompany');
    Route::post('/newSole', 'ClientController@newCompanyStore');

    Route::get('/newLimited', 'ClientController@newCompanyLimited');
    Route::get('/newPartner', 'ClientController@newCompanyPartner');
    Route::get('/servicelist', 'ClientController@newCompanyService')->name('client.servicelist');
    Route::post('/servicelist', 'ClientController@newCompanyServiceStore');
    Route::get('/contactPerson', 'ClientController@contactPersonForNewClient')->name('client.contactPerson');
    Route::post('/contactPerson', 'ClientController@newSoleAssignContact');
    Route::get('/assign-service', 'ClientController@')->name('client.assign-service');
    Route::post('/set-contact-person', 'ContactPersonController@AssignContactPerson')->name('client.set-Contact-Person');
    Route::put('/edit-contact-person', 'ContactPersonController@EditContactPerson')->name('client.edit-Contact-Person');
    Route::post('/set-contact-person-limited', 'ContactPersonController@AssignContactPersonLimited')->name('client.set-Contact-Person-Limited');

    // Route::post('/createClient', 'ClientController@store');
    Route::get('/passwrd', 'PortalPasswrdController@index')->name('client.passwrd');
    Route::post('/passwrd', 'PortalPasswrdController@store');
    Route::get('/passwrdupdate/{id}', 'PortalPasswrdController@updateview')->name('client.password');
    Route::put('/passwrdupdate/{id}', 'PortalPasswrdController@updatedata');
    Route::get('/edit/{id}', 'ClientController@edit')->name('client.edit');
    Route::put('update-client/{id}', 'ClientController@update');
    Route::get('/createContactPerson', 'ContactPersonController@addContactPerson')->name('client.createContactPerson');
    Route::post('/createContactPerson', 'ContactPersonController@store');

    Route::get('/clientservice/{id}', 'ClientController@clientService')->name('client.clientservice');
    Route::post('/addservice', 'ClientController@assignService')->name('client.addservice');
    Route::put('/editService', 'ClientController@editService');

    /*-------------------------------Client Service--------------------------------*/
    Route::get('/get-service', 'ClientsServiceController@getAssignedService')->name('getService');

    /*------------------------------------Task------------------------------------*/
    Route::get('/tasks', 'TasksController@taskjob')->name('task.tasks');
    Route::get('/notasks', 'TasksController@notaskjob')->name('task.notasks');
    Route::get('/createTask', 'TasksController@create')->name('task.createTask');
    Route::get('/taskuser', 'TasksController@taskuser')->name('task.taskuser');
    Route::post('/createTask', 'TasksController@store');
    Route::get('/tasks', 'TasksController@taskjob')->name('task.tasks');
    Route::get('/receiveDocument', 'TasksController@receiveDoc')->name('task.receiveDocument');
    Route::get('/receiveDocument/{id}', 'TasksController@documents')->name('task.document');
    Route::post('/taskDocument', 'TasksController@receivedocStore')->name('task.storeDoc');
    Route::get('/update/{id}', 'TasksController@updateview')->name('task.update');
    Route::put('/tasksupdate/{id}', 'TasksController@updateview');
    Route::get('/taskprogressall', 'TasksController@taskprogressall')->name('task.taskprogressall');
    Route::get('/tasksprogress/{id}', 'TasksController@taskProg')->name('task.taskprogress');
    Route::post('/task-post', 'TasksController@TaskPost')->name('task.taskpost');
    Route::post('/precheck/{id}', 'TasksController@Precheck')->name('task.precheck');
    Route::post('/postcheck/{id}', 'TasksController@Postcheck')->name('task.postcheck');
    Route::get('/commentview', 'TasksController@commentsview')->name('task.commentview');
    //Route::get('/taskcomment', 'TasksController@commentsview')->name('task.comment');
    Route::post('/taskcomment', 'TasksController@comments')->name('task.comments');
    Route::put('/approve/{id}', 'TasksController@approveTask')->name('task.approve');
    Route::put('/complete/{id}', 'TasksController@completeTask')->name('task.complete');
    Route::post('/save-post', 'TasksController@PostProcess')->name('task.post');
    Route::get('/assignjunior/{id}', 'TasksController@AssignJunior')->name('task.junior');
    Route::put('/assignjunior/{id}', 'TasksController@AssignJuniorStoreData');

    /*-----------------------------live chat--------------------------------*/
    Route::get('/index', 'PusherController@index')->name('chat.room');
    Route::post('/broadcast', 'PusherController@broadcast');
    Route::post('/receive', 'PusherController@receive');

    /*------------------------------------Service------------------------------------*/
    Route::get('/services', 'ServiceController@services')->name('service.services');
    Route::get('/createService', 'ServiceController@createServices')->name('service.createService');
    Route::post('/createService', 'ServiceController@store');
    Route::get('/servicedit/{id}', 'ServiceController@edit')->name('service.editService');
    Route::get('/serviceview/{id}', 'ServiceController@view')->name('service.viewService');
    Route::put('/serviceupdate/{id}', 'ServiceController@storeupdate');
    Route::get('/serviceDelete/{id}', 'ServiceController@delete')->name('service.deleteService');
    Route::post('/serviceChecklist', 'ServiceController@checkList')->name('service.checklist');
    Route::get('/prechecklistDelete/{id}', 'ServiceController@precheckListDelete');
    Route::get('/postchecklistDelete/{id}', 'ServiceController@postcheckListDelete');
    Route::get('/checklist/{id}', 'ServiceController@checklistView');

    /*------------------------------------Dispatch------------------------------------*/
    Route::get('/dispatches', 'DispatchJobController@listdispatch')->name('dispatch.dispatches');
    Route::get('/createDispatch', 'DispatchJobController@dispCreate')->name('dispatch.createDisp');
    Route::post('/createDispatch', 'DispatchJobController@storedispatch');
    Route::get('/viewdispatch/{id}', 'DispatchJobController@viewdispatch')->name('dispatch.view');
    Route::get('/displayDocsReceive', 'DispatchJobController@DocsReceive')->name('dispatch.docs');
    Route::get('/displayclient', 'DispatchJobController@DispatchClient')->name('dispatch.client');


    /*------------------------------------Reminder------------------------------------*/
    Route::get('/reminder', 'RemindersController@reminder')->name('reminder.reminder');
    Route::post('/reminder', 'RemindersController@createReminder');
    Route::get('/calendar', 'RemindersController@calendar')->name('reminder.calendar');
    Route::get('/reminder/{id}', 'RemindersController@updateview')->name('reminder.update');
    Route::post('/update', 'RemindersController@update')->name('reminder.updatereminder');
    Route::get('/reminderView', 'RemindersController@reminder');
    Route::get('/remiderdelete/{id}', 'RemindersController@reminderdelete');
    Route::get('/createreminder', 'RemindersController@createReminder');
    Route::post('/createreminder', 'RemindersController@createReminderdata');

    /*------------------------------------Employee------------------------------------*/
    Route::get('/employees', 'EmployeeController@employees')->name('employee.employee');
    Route::get('/createEmployee', 'EmployeeController@addNewEmployee')->name('employee.createEmployee');
    Route::post('/createEmployee', 'EmployeeController@store');
    // Route::post('/updateEmployees', 'EmployeeController@updateEmployees');
    Route::get('/editemployee/{id}', 'EmployeeController@editEmployees')->name('employee.edit');
    Route::put('update-employee/{id}', 'EmployeeController@updateEmployees');
    Route::get('/viewemployee/{id}', 'EmployeeController@profile')->name('employee.profile');
    Route::get('/deleteEmployee', 'EmployeeController@deleteEmployee');

    /*---------------------------------------System User-------------------------------------*/
    Route::get('/adduser', 'UserController@index')->name('user.useradd');
    Route::post('/adduser', 'RegController@create')->name('adduser');
    Route::get('/userlist', 'UserController@addview')->name('user.userlist');
    Route::get('/edituser/{id}', 'UserController@editview')->name('user.edit');
    Route::put('/edituser/{id}', 'RegController@edit');
    Route::get('/deleteuser/{id}', 'UserController@delete');
    Route::get('/userpermission/{id}', 'UserController@permission')->name('user.permission');
    // Route::put('/userpermission/{id}', 'UserController@changepermission');

    /*-----------------------------------Role & Permission--------------------------------------*/
    Route::get('/role-permission', 'RolePermissionController@index')->name('role.index');
    Route::post('/role', 'RolePermissionController@store');
    Route::put('/role-update/{id}', 'RolePermissionController@edit')->name('role.update');
    Route::get('/permission', 'RolePermissionController@permission')->name('role.permission');
    Route::post('/permission', 'RolePermissionController@addPermission');
    Route::get('/change-permission/{id}', 'RolePermissionController@changePermission')->name('role.change-permission');
    //Route::post('/setPermission', 'RolePermissionController@changePermissionStore')->name('role.setPermission');
    Route::post('/setPermission', 'RolePermissionController@changePermissionStore')->name('role.setPermission');
    Route::get('/create', 'RolePermissionController@createPermission')->name('role.create');
    Route::get('/assignPermission', 'RolePermissionController@assignPermission')->name('role.assign');

    /*------------------------------------Policies------------------------------------*/
    Route::get('/policies', 'PolicyController@displayPolicy')->name('policies.policies');
    Route::post('/upload', 'PolicyController@createPolicy')->name('policies.upload');
    Route::get('/createnewpolicy', 'PolicyController@createNewPolicy');

    /*------------------------------------Template------------------------------------*/
    Route::get('/template', 'TemplateController@template')->name('template');
    Route::post('/addtemplate', 'TemplateController@store');
    Route::get('/pdf', 'PolicyController@displayPolicy');
    Route::get('newtemplate', 'TemplateController@newTemplate');

    /*------------------------------------Reports------------------------------------*/
    Route::get('/document-received', 'ReportController@documentReceived')->name('report.documentReceived');
    Route::get('/daily', 'ReportController@dailyreport')->name('report.daily');
    Route::get('/weekly', 'ReportController@weeklyreport')->name('report.weekly');
    Route::get('/monthly', 'ReportController@monthlyreport')->name('report.monthly');
    Route::get('/yearly', 'ReportController@yearlyreport')->name('report.yearly');
    Route::get('/acccordingToDate', [App\Http\Controllers\HomeController::class, 'acccordingToDate'])->name('acccordingToDate');

    /*------------------------------------Setting------------------------------------*/
    Route::get('/generalsetting', 'GeneralSettingController@general')->name('settings.general');
    Route::put('/settingupdate/{id}', 'GeneralSettingController@updatesetting')->name('settings.update');
    Route::post('/generalsetting', 'GeneralSettingController@store');
    Route::get('/hrmsetting', 'hrmSettingController@hrmsetting')->name('settings.hrm');
    Route::get('/profilesetting', 'ProfileSettingController@profilesetting')->name('settings.profile');
    Route::get('/modulesetting', 'ModuleController@moduleSetting')->name('settings.module');

    /*------------------------------------Setting------------------------------------*/
    Route::get('/error/409', 'ErrorLog@error409')->name('error.409');
    Route::get('/error/forbidden', 'ErrorLog@error403')->name('error.403');

    /*------------------------------------Pdf generator------------------------------------*/
    Route::get('/pdf/sample', 'PDFController@generate');
    Route::post('pdf/dispatch/document', 'PDFController@DispatchPDF')->name('pdf.dispatch');
    //Route::post('pdf/dispatchDocs', 'PDFController@generatedispatch');
});

Route::get('/dashboard', function () {
    // Only authenticated users can access this route

})->middleware('auth');
