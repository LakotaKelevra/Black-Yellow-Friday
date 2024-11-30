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
        $products = Product::where('user_id', $user->id)->get();
        $reviews = Review::where('user_id', $user->id)->get();
        
        return view('auth.show', compact('user', 'reviews', 'products'));
        }
    



    
}
