<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gender;
use App\Models\BestSeller;
use App\Models\TwoStyles;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $cate = Category::all();
        $gender = Gender::all();
        $bestSeller = BestSeller::all();
        $twoStyles = TwoStyles::all();
        return view('products.index', [
            'cate' => $cate,
            'gender' => $gender,
            'bestSeller' => $bestSeller,
            'twoStyles' => $twoStyles,
        ]);
    }
    public function allProducts() {
        $cate = Category::all();
        $gender = Gender::all();
        $bestSeller = BestSeller::all();
        $products = Product::all();
        return view('products.allProducts', [
            'cate' => $cate,
            'gender' => $gender,
            'bestSeller' => $bestSeller,
            'products' => $products,
        ]);
    }
}
