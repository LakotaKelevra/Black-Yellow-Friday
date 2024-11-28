<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($product)
    {
        $product;
        return view('review.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @dd($request);

        $request->validate([
            'comment' => 'required|min:10',
            'rating' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
        ]);

        $review = Review::create([
            'comment' => $request->comment,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id,
            'author' => Auth::user()->name,
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Grazie per la tua recensione');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
