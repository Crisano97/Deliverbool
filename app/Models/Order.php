<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    public function dishes()
    {
        return $this->belongsToMany('App\Models\Dish')->withPivot(['amount']);
    }

    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }
}
