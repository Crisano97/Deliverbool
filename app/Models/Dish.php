<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order');
    }
}
