<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendNewEmail;
use App\Mail\SendRestaurantMail;
use App\Models\Dish;
use App\Models\Lead;
use App\Models\Order;
use App\Models\Restaurant;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // CREO NUOVO MODEL PER INVIARE MAIL ALL'UTENTE CHE COMPRA
        $newLead = new Lead();
        $newLead->name = $data['customer_name'];
        $newLead->mail = $data['customer_email'];
        $newLead->save();
        Mail::to($data['customer_email'])->send(new SendNewEmail($newLead));



        // PRENDO il ristorante collegato al piatto
        $restaurant = Restaurant::where('id', $data['restaurant_id'])->first();

        // PRENDO LA MAIL  DELLO USER CON ID UGUALE AL dish_id
        $user = User::where('id', $restaurant->user_id)->first();

        // CREO NUOVO MODEL PER INVIARE MAIL AL RISTORANTE
        $restaurantLead = new Lead();
        $restaurantLead->name = $user->name;
        $restaurantLead->mail = $user->email;
        $restaurantLead->save();
        Mail::to($restaurantLead->mail)->send(new SendRestaurantMail($restaurantLead));
    }
}
