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
}
