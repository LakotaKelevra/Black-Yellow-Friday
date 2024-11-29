<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $products_in_cart = $user->buyer->products()->get();
        $reviews = Review::where('user_id', $user->id)->get();
        $quantity = $user->buyer->products()->count();
        $total = 0;
        foreach ($products_in_cart as $product) {
            $final_price = $product->price - ($product->price * $product->discount / 100);
            $total += $final_price;
        }
        return view('auth.show', compact('user', 'reviews', 'products_in_cart', 'quantity', 'total'));
    }

    
}
