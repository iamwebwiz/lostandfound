<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
    	// 
    }

    public function login(Request $request)
    {
    	// 
    }

    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect('/');
    }
}
