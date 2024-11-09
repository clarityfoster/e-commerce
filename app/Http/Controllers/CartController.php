<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart() {
        $product = Product::all();
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalPrice = $cartItems->sum('price');
        return view('products.cart', [
            'cartItems' => $cartItems,
            'product' => $product,
            'totalPrice' => $totalPrice,
        ]);
    }
    public function add(Request $request) {
        $product = Product::find($request->product_id);
        $price = $product->price;
        $quantity = $request->quantity;
        $userId = Auth::id();
        $cartItem = Cart::where('product_id', $product->id)->where('user_id', $userId)->first();
        if($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->price = $price * $cartItem->quantity;
            $cartItem->save();
            return redirect()->back()->with('addToCart', 'Product quantity updated in cart!');
        } else {
            $cartItem = New Cart;
            $cartItem->product_name = $product->name;
            $cartItem->product_img = $product->product_img;
            $cartItem->product_id = $product->id;
            $cartItem->price = $price * $quantity;
            $cartItem->quantity = $request->quantity;
            $cartItem->user_id = $userId;
            $cartItem->save();
        }
        return redirect()->back()->with('addToCart', 'Product added to cart!');
    }
}
