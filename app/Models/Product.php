<?php

namespace App\Models;

use App\Models\User;
use App\Models\Buyer;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'discount',
        'image',
        'user_id',
        'final_price'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function buyers(){
        return $this->belongsToMany(Buyer::class);
    }

  

}
