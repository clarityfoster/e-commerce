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

class ProductController extends Controller
{
    public function index() {
        $cate = Category::all();
        $gender = Gender::all();
        $bestSeller = BestSeller::all();
        $twoStyles = TwoStyles::all();
        $home = Home::all();
        $looks = Looks::all();
        $style = TwoStyles::all();
        return view('products.index', [
            'cate' => $cate,
            'gender' => $gender,
            'bestSeller' => $bestSeller,
            'twoStyles' => $twoStyles,
            'looks' => $looks,
            'home' => $home,
            'style' => $style,
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
    public function detail($id) {
        $products = Product::find($id);
        return view('products.detail', [
            'product' => $products
        ]);
    }
    public function category($id) {
        $category = Category::find($id);
        $products = Product::where('category_id', $category->id)->get();
        return view('products.categories', [
            'products' => $products,
            'category' => $category,
        ]);
    }
    public function gender($id) {
        $gender = Gender::find($id);
        $products = Product::where('gender_id', $gender->id)->get();
        return view('products.gender', [
            'products' => $products,
            'gender' => $gender,
        ]);
    }
    public function style($id) {
        $style = TwoStyles::find($id);
        $products = Product::where('styles_id', $style->id)->get();
        return view('products.styles', [
            'style' => $style,
            'products' => $products,
        ]);
    }
}
