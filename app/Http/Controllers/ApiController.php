<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getAllUsers(){
    	return User::with('permissions')->get();
//    	return Auth::guard('api')->user();
//	    return view('frontend.index')->render();
    }
}