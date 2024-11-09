<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
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
            $cartItem->product_id = $product->id;
            $cartItem->price = $price * $quantity;
            $cartItem->quantity = $request->quantity;
            $cartItem->user_id = $userId;
            $cartItem->save();
        }
        return redirect()->back()->with('addToCart', 'Product added to cart!');
    }
    // public function add(Request $request) {
    //     $product = Product::find($request->product_id);
    //     $price = $product->price;
    //     $quantity = $request->quantity;
    //     $userId = Auth::id();
    //     $cartItem = Cart::where('user_id', $userId)
    //     ->where('product_id', $product->id)
    //     ->first();
    //     if ($cartItem) {
    //         // If the product is already in the cart, update the quantity and total price
    //         $cartItem->quantity += $quantity;
    //         $cartItem->price = $cartItem->quantity * $price; // Update the total price based on new quantity
    //         $cartItem->save();
    //         return redirect()->back()->with('addToCart', 'Product quantity updated in cart!');
    //     } else {
    //         // If the product is not in the cart, create a new cart item
    //         Cart::create([
    //             'user_id' => $userId,
    //             'product_name' => $product->name,
    //             'product_id' => $product->id,
    //             'price' => $price * $quantity, // Save the total price for the quantity
    //             'quantity' => $quantity,
    //         ]);

    //         return redirect()->back()->with('addToCart', 'Product added to cart!');
    //     }
    // }
}
