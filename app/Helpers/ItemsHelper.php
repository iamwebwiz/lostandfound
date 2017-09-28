<?php

namespace App\Helpers;

use App\Item;

class ItemsHelper
{
    public static function getLostItems($userID)
    {
        $lostItems = Item::where('category', 'lost')
            ->where('user_id', $userID);

        return count($lostItems);
    }

    public static function getFoundItems($userID)
    {
        $foundItems = Item::where('category', 'found')
            ->where('user_id', $userID);

        return count($foundItems);
    }
}
