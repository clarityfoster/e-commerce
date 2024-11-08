<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Looks extends Model
{
    use HasFactory;
    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
