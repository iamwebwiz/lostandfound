<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function postItem(Request $request)
    {
    	$user = Auth::user();

    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required',
    		'location' => 'required'
    	]);

    	$item = new Item;
    	$item->title = $request->title;
    	$item->description = $request->description;
    	$item->category = $request->category;
    	$item->location = $request->location;

    	if ($user->items->save()) {
    		// redirect
    		return redirect('/home');
    	}
    	return redirect()->back()->with('err', 'Oops! Looks like an error occured.');
    }

    public function editItem($itemID)
    {
    	$item = Item::find($itemID);
    	return view('user.items.edit', compact('item'));
    }

    public function deleteItem($itemID)
    {
    	$item = Item::where('id', $itemID)->first();
    	$item->delete();
    	return redirect()->back()->with('success', 'Successfully deleted the item');
    }

    public function postEditItem(Request $request, $itemID)
    {
    	$item = Item::find($itemID);
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required',
    		'location' => 'required',
    	]);

    	$item->title = $request->title;
    	$item->description = $request->description;
    	$item->category = $request->category;
    	$item->location = $request->location;

    	if ($item->update()) {
    		// redirect
    		return redirect()->back()->with('success', 'Update successfully done!');
    	}
    	return redirect()->back()->with('err', 'Oops! Looks like an error occured.');
    }
}
