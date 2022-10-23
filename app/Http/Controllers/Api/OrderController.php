<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Order;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        $today = new Carbon();
        $request->validate([
            'customer_name' => 'required | max:100',
            'customer_email' => 'required | email | max:100',
            'customer_phone_number' => 'required | max:100',
            'customer_address' => 'required | max:100',
            // 'order' => 'required',
            // 'total_price' => 'required'
        ]);

        $data = $request->all();
        $order = $data['order'];
        // $to = $data['email'];
        // $cart = $data['cart'];
        // $cart = json_decode()
        // dd(json_decode(request('cart')));
        // $cart = (array)json_decode($data['cart']);
        // var_dump($data['cart']);
        // $cart = json_decode(request('cart'));
        $newOrder = new Order();
        $newOrder->restaurant_id = $data['restaurant_id'];
        $newOrder->order_code = rand(1, 1000);
        $newOrder->total_price = $data['total_price'];
        $newOrder->order_date = $today;
        $newOrder->is_payed = true;
        $newOrder->customer_name = $data['customer_name'];
        $newOrder->customer_email = $data['customer_email'];
        $newOrder->customer_address = $data['customer_address'];
        $newOrder->customer_phone_number = $data['customer_phone_number'];

        // $newOrder->total_price = $data['amount'];
        $newOrder->save();
        foreach ($order as $dish) {

            $newOrder->dishes()->attach(json_decode($dish)->id, ['amount' => json_decode($dish)->quantity]);
        }
    }
}
