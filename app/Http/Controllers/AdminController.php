<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function postItem(Request $request)
    {
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

    	if ($item->save()) {
    		return redirect()->back();
    	}
    }

    public function editItem($itemID)
    {
    	$item = Item::find($itemID);
    	return view('admin.items.edit', compact('item'));
    }

    public function postEditItem(Request $request, $itemID)
    {
    	$item = Item::find($itemID);

    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required',
    		'location' => 'required'
    	]);

    	$item->title = $request->title;
    	$item->description = $request->description;
    	$item->category = $request->category;
    	$item->location = $request->location;

    	if ($item->update()) {
    		return redirect()->route('admin.items')->with('success', 'Item edited successfully!');
    	}
    	return redirect()->back()->with('err', 'Oops! An error occured!');
    }

    public function deleteItem($itemID)
    {
    	$item = Item::where('id', $itemID)->first();
    	if ($item->delete()) {
    		return redirect()->back()->with('success', 'Successfully deleted item.');
    	}
    	return redirect()->back()->with('err', 'Oops! An error occured.');
    }
}
