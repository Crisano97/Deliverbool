<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'image',
        'p_iva',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function dishes()
    {
        return $this->hasMany('App\Models\Dish');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
