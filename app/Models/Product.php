<?php

namespace App\Models;

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

}
