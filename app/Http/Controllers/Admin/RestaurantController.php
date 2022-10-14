<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class RestaurantController extends Controller
{
    protected $validationRules = [
        'name' => 'required|min:3|unique:restaurants',
        'address' => 'required|min:5',
        'image' => 'required|active_url|max:500',
        'categories' => 'required|min:1|exists:categories,id',
        'p_iva' => 'required|digits:11',

    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantForm = new Restaurant();
        $categories = Category::all();
        $restaurants = Restaurant::where('user_id', Auth::id())->get();
        return view('admin.restaurants.index', compact(['restaurantForm', 'categories', 'restaurants']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurantForm = new Restaurant();
        $categories = Category::all();
        return view('admin.restaurants.create', compact(['restaurantForm', 'categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validatedData = $request->validate($this->validationRules);

        $newRestaurant = new Restaurant;
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['name'], '-');
        $newRestaurant->fill($data);
        $newRestaurant->save();
        $newRestaurant->categories()->sync($data['categories']);

        return redirect()->route('admin.restaurants.index')->with('created', $data['name'] . ' ' . 'è stato creato con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->all();
        $request->validate([
            'image' => 'activeurl|required',
        ]);

        $data['user_id'] = Auth::id();

        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name'], '-');
        }

        $restaurant->update($data);

        return redirect()->route('admin.restaurants.index')->with('edited', "L'immagine è stata modificata con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index')->with('deleted', $restaurant->name . ' ' . 'é stato eliminato con successo');;
    }
}
