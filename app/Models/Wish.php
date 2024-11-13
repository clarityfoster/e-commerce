<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    public function prouduct() {
        return $this->belongsTo('App\Models\Product');
    }
}
