<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedProduct extends Model
{
    protected $fillable = [
        'name', 
        'price', 
        'variations', 
        'sku', 
        'quantity', 
        'description', 
        'image'
    ];

    protected $casts = [
        'variations' => 'array',    
        'image' => 'array'
    ];
}
