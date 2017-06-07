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
	var_dump(metaphone('Catherine'));
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

Route::get('user/export-excel','UserController@getExportExcel')->name('users.export');



Route::get('sendemail', function () {
    Mail::send('emails.news', [], function($message)
    {
        $message->to('tieuquangmg@gmail.com', 'Jane Doe')->subject('This is a demo!');
    });
});