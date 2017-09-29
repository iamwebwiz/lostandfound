<?php

namespace App\Http\Controllers;

use App\Helpers\ItemsHelper;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function displayItems()
    {
        $items = ItemsHelper::getAllPostedItems();

        return view('welcome', compact('items'));
    }

    public function showItemDetails($itemID)
    {
        $item = ItemsHelper::getItemDetails($itemID);
        $author = $item->user;

        return view('itemdetails', compact('item', 'author'));
    }
}
