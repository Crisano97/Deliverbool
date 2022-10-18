<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestaurantDishes($id)
    {
        $restaurant_id = $id;
        $restaurant = Restaurant::where('id', $restaurant_id)->first();
        $dishes = $restaurant->dishes;
        dd($dishes);
        return response()->json([
            'response' => true,
            'results' => $dishes,
        ]);
    }

    
}
