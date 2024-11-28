<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller

{
    public function homepage()
    {
        $products = Product::all()->sortByDesc('created_at')->take(6);
        $reviews = Review::all()->sortByDesc('created_at')->where('rating','>=', 4)  ->take(3);
        return view('welcome', compact('products', 'reviews'));
    }

    public function user($id)
    {
        $reviews = Review::where('user_id', $id)->get();
        return view('user.show', compact('id'));
    }
    
}
