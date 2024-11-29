<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{
    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
