<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public function foods()
    {
        return $this->belongsToMany('App\Food');
    }
}
