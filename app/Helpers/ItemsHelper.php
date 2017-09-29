<?php

namespace App\Helpers;

use App\Item;
use App\User;

class ItemsHelper
{
    public static function getLostItems($userID)
    {
        $lostItems = Item::where('category', 'lost')
            ->where('user_id', $userID);

        return $lostItems->count();
    }

    public static function getFoundItems($userID)
    {
        $foundItems = Item::where('category', 'found')
            ->where('user_id', $userID);

        return $foundItems->count();
    }

    public static function getAllPostedItems()
    {
        $postedItems = Item::take(12)->inRandomOrder()->get();
        return $postedItems;
    }

    public static function getItemDetails($itemID)
    {
        $item = Item::find($itemID);
        return $item;
    }

    public static function itemToEdit($itemID)
    {
        $item = Item::find($itemID);
        return $item;
    }
}
