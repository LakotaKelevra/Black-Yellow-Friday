<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function buy(Request $request,Product $product){
        // @dd('ciao');
        $user = Auth::user();
        if (!$user->buyer) {
            $user->buyer()->create();
        }
        
        $buyer = $user->buyer;

        if ($buyer->products->contains($product->id)) {
            return redirect()->back()->with('info', 'Il prodotto è già nel carrello.');
        }
        $buyer->products()->syncWithoutDetaching($product->id);
        
        return redirect()->back()->with('success', 'Prodotto aggiunto al carrello');
    }

    public function removeFromCart(Product $product)
    {
        $buyer = Auth::user()->buyer;
        $buyer->products()->detach($product->id);
        return redirect()->back()->with('success', 'Prodotto rimosso dal carrello');
    }

    public function cart()
    {

        $user = Auth::user();
        $products_in_cart = $user->buyer->products()->get();
        $quantity = $user->buyer->products()->count();
        $total = 0;
        foreach ($products_in_cart as $product) {
            $final_price = $product->price - ($product->price * $product->discount / 100);
            $total += $final_price;
        }
        return view('auth.cart', compact('user', 'products_in_cart', 'quantity', 'total'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buyer $buyer)
    {
        //
    }
}
