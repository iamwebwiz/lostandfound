<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
        // validate user input
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:4|max:20'
        ]);

        // create new user
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        // redirect if successful
        if ($user->save()) {
            return redirect('/login')->with('success', 'You are successfully registered!');
        }
        return redirect()->back()->with('err', 'Unable to register, please check the form again!');
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
