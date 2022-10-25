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
    public function index(){
        {
            $restaurants = Restaurant::all();
            return response()->json([
                'response' => true,
                'results' => $restaurants
            ]);
        }
    }
    public function filter(Request $request)
    {

        $filterCategories = $request->input('categories[]');
        $restaurants = Restaurant::with('dishes', 'categories');
        dd($filterCategories);
        //SE IL FILTRO ESISTE, LO PASSO
        if ($filterCategories) {
            foreach ($filterCategories as $categoryFake) {
                $restaurants->whereHas('categories', function ($query) use ($categoryFake) {
                    $query->where('id', $categoryFake);
                });
            }
        }
        // dump($restaurants);
        $filtertedRestaurants = $restaurants->get();
        // dd($filtertedRestaurants);

        foreach ($restaurants as $restaurant) {
            if (substr($restaurant->image, 0, 4) != 'http') {
                $restaurant->image = 'storage/uploads/' . $restaurant->image;
            }
        }
        return response()->json([
            'response' => true,
            'results' => $filtertedRestaurants,
        ]);
    }

    public function sponsoredRestaurants()
    {
        $restaurants = Restaurant::with('categories')->get();
        $array = [];
        $array = $restaurants->toArray();
        // dd($array);
        $randomRestaurants = Arr::random($array, 3);
        foreach ($restaurants as $restaurant) {
            if (substr($restaurant->image, 0, 4) != 'http') {
                $restaurant->image = 'storage/uploads/' . $restaurant->image;
            }
        }
        return response()->json([
            'response' => true,
            'results' => $randomRestaurants,
        ]);
    }

    public function searchCheckbox(Request $request)
    {
        $data = $request->all();

        $users = Restaurant::where('id', '>=', 1);

        if (array_key_exists('categories', $data)) {
            $users->whereHas('categories', function (Builder $query) use ($data) {
                $query->whereIn('name', $data['categories']);
            });
        }
        // foreach ($users as $restaurant) {
        //     if (substr($restaurant->image, 0, 4) != 'http') {
        //         $restaurant->image = 'storage/uploads/' . $restaurant->image;
        //     }
        // }
        return response()->json([
            'response' => true,
            'results' => [
                'data' => $users->with(['categories'])->get(),
            ],
        ]);
    }

    public function getRestaurantsByCategory(Request $request)
    {
        $user_data = $request->all();

        if (isset($user_data['categories'])) {

            $categories = explode(',', $user_data['categories']);

            for ($i = 0; $i < count($categories); $i++) {
                $categories[$i] = intval($categories[$i]);
            }

            $restaurants = Restaurant::with('categories')->get()->toArray();

            $filtered_restaurants = [];

            foreach ($restaurants as $restaurant) {

                $category_matched = 0;

                foreach ($restaurant['categories'] as $category) {

                    if (in_array($category['id'], $categories)) {
                        ++$category_matched;
                    }
                }
                if (count($categories) === $category_matched) {
                    $filtered_restaurants[] = $restaurant;
                }
            }

            if (count($filtered_restaurants) > 0) {

                $data = [
                    'success' => true,
                    'is_empty' => false,
                    'results' => $filtered_restaurants,
                ];
            } else {

                $data = [
                    'success' => true,
                    'is_empty' => true,
                    'results' => [],
                ];
            }
        } else {

            $data = [
                'success' => false,
                'is_empty' => true,
                'results' => null,
            ];
        }

        return response()->json($data);
    }
}
