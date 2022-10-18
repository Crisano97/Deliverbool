<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filterCategories = request()->input('categories[]');
        $restaurants = Restaurant::with('dishes', 'categories.restaurants');
        //SE IL FILTRO ESISTE, LO PASSO
        if ($filterCategories) {
            foreach ($filterCategories as $categoryFake) {
                $restaurants->whereHas('categories', function ($query) use($categoryFake){
                    $query->where('id', $categoryFake);
                });
            }
        }
        // dump($restaurants);
        $filtertedRestaurants = $restaurants->get();
        // dd($filtertedRestaurants);
        
        foreach ($restaurants as $restaurant) {
            if (substr($restaurant->image, 0 , 4) != 'http') {
                $restaurant->image = 'storage/uploads/' . $restaurant->image;
            }
           
        }
        return response()->json([
            'response' => true,
            'results' => $filtertedRestaurants,
        ]);
    }

    public function sponsoredRestaurants (){
        $restaurants = Restaurant::all();
        $array = [];
        $array = $restaurants->toArray();
        // dd($array);
        $random = Arr::random($array, 3);
        dd($random);
    }
}
