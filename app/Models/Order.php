<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{   
    protected $fillable = [
        'name', 'email_address', 'phone_number', 
        'street_address', 'apt_num', 'state', 
        'city', 'zip_code', 'country'
    ];
    protected $guarded = [];
}
