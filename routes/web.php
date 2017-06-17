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
    dd(\App\Models\User_email::first()->email_to_user);
//	$user = \App\User::find(3);
//	$roles = [1, 2, 3]; // Using an array of ids
//	$user->attachRole($roles);
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('userEmployeeTypes', 'UserEmployeeTypeController');

Route::resource('userRanks', 'UserRankController');

Route::resource('userStatuses', 'UserStatusController');

Route::resource('devices', 'DeviceController');

Route::resource('deviceStatuses', 'DeviceStatusController');

Route::resource('servers', 'ServerController');

Route::resource('serverStatuses', 'ServerStatusController');

Route::resource('deviceBrands', 'DeviceBrandController');

Route::resource('users', 'UserController');

Route::resource('absences', 'AbsenceController');

Route::resource('absenceTypes', 'AbsenceTypeController');

Route::resource('absenceStatuses', 'AbsenceStatusController');

Route::resource('userLeaves', 'UserLeaveController');

Route::resource('years', 'YearController');

Route::get('userDetails','UserLeaveController@getDetail')->name('userdetails.leave');
Route::get('showuserLeaves/{id}','UserLeaveController@userLeavesDetail')->name('user.leaves.detail');

Route::get('devicesExport','DeviceController@getExport')->name('devices.export');

Route::post('user/export-excel','UserController@postExportExcel')->name('users.export');



Route::get('sendemail', function () {
    Mail::send('emails.news', [], function($message)
    {
        $message->to('tieuquangmg@gmail.com', 'Jane Doe')->subject('This is a demo!');
    });
});

Route::resource('roles', 'RoleController');

Route::get('attackrole/{role_id}','RoleController@getAttackRole')->name('role.attack.role');
Route::post('attackrole/{id}','RoleController@postAttackRole')->name('role.attack.role');

Route::get('attackuserpermission/{user_id}','RoleController@getAttackUserPermission')->name('user.attack.permission');
Route::post('attackuserpermission/{id}','RoleController@postAttackUserPermission')->name('user.attack.permission');
Route::post('send-email','UserController@postSendEmail')->name('sendemail');
Route::resource('banks', 'BankController');

Route::resource('deviceSuppliers', 'Device_supplierController');

Route::resource('doccuments', 'DoccumentsController');

Route::resource('doccumentServes', 'Doccument_serveController');

Route::resource('userEmails', 'User_emailController');