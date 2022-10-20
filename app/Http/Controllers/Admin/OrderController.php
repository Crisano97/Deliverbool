<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();
        $array = $restaurants->toArray();
        $restaurantsId = array_column($array, 'id');
        $arrayStringa = implode($restaurantsId);
        $orders = Order::where('restaurant_id', $arrayStringa)->paginate(4);
        return view('admin.restaurants.orderIndex', compact(['orders', 'restaurants']));
    }
}
