<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TotalOrder extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'order_total'
    ];
}
