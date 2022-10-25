<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $orders = Order::where('restaurant_id', $arrayStringa)->orderBy('order_date', 'DESC')->paginate(4);
        return view('admin.restaurants.orderIndex', compact(['orders', 'restaurants']));
    }

    public function stats()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();
        $array = $restaurants->toArray();
        $restaurantsId = array_column($array, 'id');
        $arrayStringa = implode($restaurantsId);
        $orders = Order::select(
            DB::raw('sum(total_price) as sums, count(id) as orders'),
            DB::raw("DATE_FORMAT(order_date,'%Y %m') as months")
        )
            ->groupBy('months')->where([['restaurant_id', $arrayStringa]])->where('order_date', '>', Carbon::now()->endOfMonth()->subtract(2, 'year'))
            ->get();

        return view('admin.restaurants.stats', compact(['orders',]));
    }
}
