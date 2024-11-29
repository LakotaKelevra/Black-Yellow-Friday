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
