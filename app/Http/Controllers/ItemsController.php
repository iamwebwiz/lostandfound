<?php

namespace App\Http\Controllers;

use App\Helpers\ItemsHelper;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ItemsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function newItem()
    {
        $countriesJson = File::get(public_path('/data/country-by-name.json'));
        $countries = json_decode($countriesJson);

        $nigerianLocations = [
            'Osun', 'Oyo', 'Delta', 'Lagos'
        ];

        return view('user.items.new', compact(
            'countries', 'nigerianLocations'
        ));
    }

    public function showPostedItems()
    {
        $postedItems = Auth::user()->items()
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('user.items.index', compact('postedItems'));
    }

    public function postNewItem(Request $request)
    {
    	$user = Auth::user();

    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required',
            'country' => 'required',
    		'location' => 'required',
            'image' => 'image|mimes:jpg,jpeg,gif,png,tiff,bmp,svg|max:10240'
    	]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = $request->title . time() . '.' . $request->image->getClientOriginalExtension();
            $image = $request->image->move(storage_path('app/public/lost-and-found'), $imagename);
        } else {
            return redirect()->back()->with('err', 'No image selected!')
                ->withInput($request->except('image'));
        }

    	$item = new Item;
    	$item->title = $request->title;
    	$item->description = $request->description;
    	$item->category = $request->category;
        $item->image = $imagename;
    	$item->country = $request->country;
        $item->location = $request->location;

    	if ($user->items()->save($item)) {
    		// redirect
    		return redirect()->route('posteditems')->with('success', 'Item successfully posted');
    	}
    	return redirect()->back()->with('err', 'Oops! Looks like an error occured.');
    }

    public function deleteItem($itemID)
    {
        $item = Item::where('id', $itemID)->first();
        $item->delete();
        return redirect()->back()->with('success', 'Successfully deleted the item');
    }

    public function editItem($itemID)
    {
    	$item = ItemsHelper::itemToEdit($itemID);
        $categories = ['lost', 'found'];

    	return view('user.items.edit', compact('item', 'categories'));
    }

    public function postEditItem(Request $request, $itemID)
    {
    	$item = Item::find($itemID);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $item->title = $request->title;
        $item->description = $request->description;
        $item->category = $request->category;

    	if ($item->update()) {
            return redirect()->route('posteditems')->with('success', 'Update successfully done!');
    	}

        return redirect()->back()->with('err', 'Oops! Looks like an error occured.');
    }
}
