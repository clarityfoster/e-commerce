<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gender;
use App\Models\BestSeller;
use App\Models\TwoStyles;
use App\Models\Product;
use App\Models\Looks;
use App\Models\Home;
use App\Models\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cate = Category::all();
        $gender = Gender::all();
        $bestSeller = BestSeller::all();
        $twoStyles = TwoStyles::all();
        $home = Home::all();
        $looks = Looks::all();
        $style = TwoStyles::all();
        $userId = Auth::id();
        $totalQuantity = Cart::where('user_id', $userId)->sum('quantity');
        return view('home', [
            'cate' => $cate,
            'gender' => $gender,
            'bestSeller' => $bestSeller,
            'twoStyles' => $twoStyles,
            'looks' => $looks,
            'home' => $home,
            'style' => $style,
            'totalQuantity' => $totalQuantity,
        ]);
    }
}
