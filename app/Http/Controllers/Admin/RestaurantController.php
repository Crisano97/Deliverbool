<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class RestaurantController extends Controller
{
    protected $validationRules = [
        'name' => 'required|min:3|unique:restaurants|regex:/[a-zA-Z]/',
        'address' => 'required|min:5|regex:/[a-zA-Z0-9]/',
        'image' => 'image|mimes:jpeg,bmp,png,jpg|required|max:512',
        'categories' => 'required|min:1|exists:categories,id',
        'p_iva' => 'required|digits:11|unique:restaurants|regex:/[0-9]/',

    ];

    protected $validationCustomMessages = [
        'name.required' => 'Il nome del piatto é obbligatorio',
        'name.min' => 'Il nome del piatto deve essere di almeno 3 caratteri',
        'name.unique' => 'Il nome del piatto é giá presente',
        'name.regex' => 'Il nome puó contenere solo lettere',
        'address.required' => 'L\'Indirizzo é obbligatorio',
        'address.min' => 'L\'Indirizzo deve essere di almeno 5 caratteri',
        'address.regex' => 'L\'Indirizzo puó contenere solo a-z, A,Z e 0-9',
        'image.image' => 'Il formato inserito non é un\'immagine',
        'image.mimes' => 'Il formato dell\'immagine puó essere solo jpeg,bmp,png,jpg',
        'image.required' => 'L\'immagine é obbligatoria',
        'image.max' => 'L\'immagine deve avere una dimensione massima di 512kb',
        'p_iva.required' => 'La PIVA é obbligatoria',
        'p_iva.digits' => 'La PIVA deve essere obbligatoriamente di 11 numeri',
        'p_iva.unique' => 'La PIVA é giá presente, inserici una nuova PIVA',
        'p_iva.regex' => 'La PIVA puó contenere solo numeri',
        'categories.required' => 'La categoria é obbligatoria',
        'categories.min' => 'Seleziona almeno una categoria',
        'categories.exists' => 'Seleziona solo una delle categorie giá esistenti',
    ];

    protected $imageValidation = [
        'image' => 'image|mimes:jpeg,bmp,png,jpg|required',
    ];

    protected $imageValidationMessages = [
        'image.image' => 'Il formato inserito non é un\'immagine',
        'image.mimes' => 'Il formato dell\'immagine puó essere solo jpeg,bmp,png,jpg',
        'image.required' => 'L\'immagine é obbligatoria',
        'image.file' => 'File non valido',
        'image.uploaded' => 'Impossibile caricare il file',
        // 'image.size' => 'L\'immagine deve avere una dimensione massima di 512kb',
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
        $validatedDate = $request->validate($this->validationRules, $this->validationCustomMessages);

        $newRestaurant = new Restaurant;
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['name'], '-');
        $data['image'] = Storage::put('uploads', $data['image']);
        $newRestaurant->fill($data);
        $newRestaurant->save();
        $newRestaurant->categories()->sync($data['categories']);

        return redirect()->route('admin.restaurants.index')->with('create', $data['name'] . ' ' . 'è stato creato con successo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        
        return view('admin.restaurants.index', compact('restaurant'));
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
        // $validatedDate = $request->validate($this->validationRules, $this->validationCustomMessages);
        $data = $request->all();

        $validatedImage = $request->validate($this->imageValidation, $this->imageValidationMessages);
        $data['user_id'] = Auth::id();
        $data['image'] = Storage::put('uploads', $data['image']);
        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name'], '-');
        }

        $restaurant->update($data);

        return redirect()->route('admin.restaurants.index')->with('edit', "L'immagine è stata modificata con successo");
    }
}
