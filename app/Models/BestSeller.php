<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BestSeller extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function gender() {
        return $this->belongsTo('App\Models\Gender');
    }
}
