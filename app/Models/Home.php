<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;

class Home extends Model
{
    use hasFactory;
    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
