<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function gender() {
        return $this->belongsTo('App\Models\Gender');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function looks() {
        return $this->belongsTo('App\Models\Looks');
    }
    public function home() {
        return $this->belongsTo('App\Models\Home');
    }
}
