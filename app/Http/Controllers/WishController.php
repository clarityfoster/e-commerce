<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wish;
use App\Models\Product;

class WishController extends Controller
{
    public function showWish() {
        return view('products.wish');
    }
    public function add(Request $request) {
        $userId = Auth::id();
        $product = Product::find($request->product_id);
        $wish = Wish::where('user_id', $userId)->where('product_id', $product->id)->first();
        if($wish) {
            return back();
        }
        $wish = new Wish;
        $wish->name = $product->name;
        $wish->price = $product->price;
        $wish->product_id = $product->id;
        $wish->img = $product->product_img;
        $wish->user_id = $userId;
        $wish->save();
        return redirect()->back()->with('addWish', 'Added to wish list successfully.');
    }
    public function remove(Request $request) {
        $userId = Auth::id();
        $product = Product::find($request->product_id);
        $wish = Wish::where('user_id', $userId)->where('product_id', $product->id)->first();
        if($wish) {
            $wish->delete();
            return redirect()->back()->with('wishRemove', 'Removed from wish successfully');
        } else {
            return back();
        }
    }
    public function wishList() {
        $userId = Auth::id();
        $wish = Wish::where('user_id', $userId)->get();
        return view('products.wish', [
            'wishes' => $wish
        ]);
    }
}
