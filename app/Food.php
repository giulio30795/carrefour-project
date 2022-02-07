<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'product_name',
        'brand',
        'price',
        'cover',
        'conservation',
        'stock',
        'quantity',
        'discount',
        'description',
    ];
}
