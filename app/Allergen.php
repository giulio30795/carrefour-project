<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    public function foods()
    {
        return $this->belongsToMany("App\Food");
    }
}
