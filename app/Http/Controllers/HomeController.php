<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gender;
use App\Models\BestSeller;
use App\Models\TwoStyles;
use App\Models\Product;
use App\Models\Looks;
use App\Models\Home;


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
        return view('home', [
            'cate' => $cate,
            'gender' => $gender,
            'bestSeller' => $bestSeller,
            'twoStyles' => $twoStyles,
            'looks' => $looks,
            'home' => $home,
            'style' => $style,
        ]);
    }
}
