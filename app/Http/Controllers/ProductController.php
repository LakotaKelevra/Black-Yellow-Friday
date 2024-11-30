<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProductController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public static function middleware(){
        return[new Middleware('auth', except: ['index', 'show'])];
            }

     public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'image' => 'required',
            
        ]);
    // dd($request->all());
        $final_price = $request->price - ($request->price * $request->discount / 100);
        $product= Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'discount' => $request->discount,  
            
            'image' => $request->file('image')->store('/products'),
            
            'user_id' => Auth::user()->id,
            'final_price' => $final_price,
            
        ]);
        // dd($final_price);

        return redirect(route('product.create'))->with('success', 'Prodotto creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $reviews = $product->reviews()->orderBy('rating', 'desc')->get(); 
        // $users = []; 
        // foreach ($reviews as $review) {
        //     array_push($users, $review->user_id);
        // }
        // @dd($users);   
        $users = User::select('id', 'name')->whereIn('id', $reviews->pluck('user_id'))->get();
        return view('product.show', compact('product', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Prodotto eliminato con successo');
    }
}
