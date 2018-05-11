<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, Item $item)
    {
        $query = $request->input('query');
        $items = $item->searchItems($query);

        return view('searchresults', compact('items'));
    }
}
