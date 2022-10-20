<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDishes($cart)
    {
        $dishes = Dish::where('id', $cart->id)->get();
        return response()->json([
            'response' => true,
            'results' => [
                'dishes' => $dishes,
                'amount' => $cart->amount,
            ]
        ]);
    }
}
