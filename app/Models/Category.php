<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function bestSeller() {
        return $this->belongsTo('App\Models\BestSeller');
    }
    public function products() {
        return $this->belongsTo('App\Models\Product');
    }
}
