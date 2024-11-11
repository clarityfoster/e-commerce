<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function account() {
        $user = Auth::user();
        return view('profile.account', [
            'user' => $user
        ]);
    }
}
