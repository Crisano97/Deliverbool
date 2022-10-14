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
        'name' => 'required|min:3|unique:restaurants|regex:/[a-zA-Z]/',
        'address' => 'required|min:5|regex:/[a-zA-Z0-9]/',
        'image' => 'required|active_url|max:500',
        'categories' => 'required|min:1|exists:categories,id',
        'p_iva' => 'required|digits:11|regex:/[0-9]/',

    ];

    protected $validationCustomMessages = [
        'name.required' => 'Il nome del piatto é obbligatorio',
        'name.min' => 'Il nome del piatto deve essere di almeno 3 caratteri',
        'name.unique' => 'Il nome del piatto é giá presente',
        'name.regex' => 'Il nome puó contenere solo lettere',
        'address.required' => 'L\'Indirizzo é obbligatorio',
        'address.min' => 'L\'Indirizzo deve essere di almeno 5 caratteri',
        'address.regex' => 'L\'Indirizzo puó contenere solo a-z, A,Z e 0-9',
        'image.required' => 'L\'immagine é obbligatoria',
        'image.active_url' => 'L\'immagine deve essere un link attivo',
        'image.max' => 'Il link dell\'immagine deve essere lunga massimo 500 caratteri',
        'p_iva.required' => 'La PIVA é obbligatoria',
        'p_iva.digits' => 'La PIVA deve essere obbligatoriamente di 11 numeri',
        'p_iva.regex' => 'La PIVA puó contenere solo numeri',
        'categories.required' => 'La categoria é obbligatoria',
        'categories.min' => 'Seleziona almeno una categoria',
        'categories.exists' => 'Seleziona solo una delle categorie giá esistenti',
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

        $validatedData = $request->validate($this->validationRules, $this->validationCustomMessages);

        $newRestaurant = new Restaurant;
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['name'], '-');
        $newRestaurant->fill($data);
        $newRestaurant->save();
        $newRestaurant->categories()->sync($data['categories']);

        return redirect()->route('admin.restaurants.index')->with('create', $data['name'] . ' ' . 'è stato creato con successo');
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

        return redirect()->route('admin.restaurants.index')->with('edit', "L'immagine è stata modificata con successo");
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
