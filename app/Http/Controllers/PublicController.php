<?php

namespace App\Http\Controllers;

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
        return view('welcome', compact('products'));
    }

    
}
