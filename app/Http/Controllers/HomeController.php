<?php

namespace App\Http\Controllers;

use App\Helpers\ItemsHelper;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showProfile()
    {
        $user = Auth::user();
        $lostItems = ItemsHelper::getLostItems(Auth::id());
        $foundItems = ItemsHelper::getFoundItems(Auth::id());

        return view('user.profile.index', compact('user', 'lostItems', 'foundItems'));
    }

    public function editProfile()
    {
        $user = Auth::user();

        return view('user.profile.edit', compact('user'));
    }

    public function processEditProfile(Request $request, $userID)
    {
        $userID = Auth::id();
        $user = User::find($userID);

        $user->name = $request->name;
        $user->location = $request->location;
        $user->phone = $request->phone;
        if ($user->update()) {
            return redirect()->route('profile')->with('success', 'Profile updated Successfully!');
        }
        return redirect()->back()->with('err', 'Oops! An error occured while updating your profile.');
    }
}
