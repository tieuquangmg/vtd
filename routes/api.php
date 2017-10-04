<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');
$api->version("v1", function ($api){
	$api->get("hello",'App\Http\Controllers\ApiController@getAllUsers');
	$api->get('/qqq', function (Request $request) {
		return \Illuminate\Support\Facades\Auth::guard('api')->user();
//		return $request->user();
	});
	$api->post("register", "App\Http\Controllers\Auth\RegisterController@register");
	$api->post("login", "App\Http\Controllers\Auth\LoginController@apilogin");
	$api->post('auth/login', 'App\Http\Controllers\UserController@login');
});

Route::post('auth/register', 'App\Http\Controllers\UserController@register');

Route::group(['middleware' => 'jwt.auth'], function () {
	Route::get('user', '\App\Http\Controllers\UserController@getAuthUser');
});