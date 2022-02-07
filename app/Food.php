<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

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
