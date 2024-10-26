<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'availability',
        'categories',
        'type',
        'style',
        'quantity',
        'sku',
        'description',
        'variations',
        'image'
    ];

    protected $casts = [
        'variations' => 'array',    
        'image' => 'array'
    ];
}
