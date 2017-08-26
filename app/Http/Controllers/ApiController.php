<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllUsers(){
    	return User::with('permissions')->get();
//	    return view('frontend.index')->render();
    }
}