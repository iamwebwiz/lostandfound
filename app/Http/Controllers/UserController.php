<?php

namespace App\Http\Controllers;

use App\Helpers\ItemsHelper;
use App\Item;
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
            'location' => 'required',
            'phone' => 'required',
            'profilepic' => 'image|mimes:jpg,png,gif,jpeg|max:10240',
            'password' => 'required|min:4|max:20'
        ]);

        if ($request->hasFile('profilepic')) {
            $profilepic = $request->profilepic;
            $imagename = $request->name . time() . '.' . $request->profilepic->getClientOriginalExtension();
            $profilepic = $request->profilepic->move(storage_path('app/public/users'), $imagename);
        } else {
            return redirect()->back()->with('err', 'Oops! No image selected!')
                ->withInput($request->except('profilepic'));
        }

        // create new user
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->location = $request->location;
        $user->profilepic = $imagename;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        // redirect if successful
        if ($user->save()) {
            Auth::login($user);
            return redirect('/home')->with('success', 'You are successfully registered!');
        }
        return redirect()->back()->with('err', 'Unable to register, please check the form again!');
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
