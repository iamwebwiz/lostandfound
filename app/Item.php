<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function admin()
    {
    	return $this->belongsTo(Admin::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function searchItems($query)
    {
        return $this->where('title', 'like', "%$query%")
                    ->orWhere('description', 'like', "%$query%")
                    ->orWhere('category', 'like', "%$query%")
                    ->orWhere('country', 'like', "%$query%")
                    ->orWhere('location', 'like', "%$query%")
                    ->paginate(30);
    }
}
