<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    protected $validationRules = [
        'name'=> 'required|min:3|regex:/[a-zA-Z0-9]/',
        'image'=> 'mimes:jpeg,bmp,png,jpg|required|max:512',
        'ingredients'=> 'required|min:5|regex:/[a-zA-Z]/',
        'price'=> 'required|numeric|regex:/[0-9]/|min:0.10|max:99.99',
        'visible'=> 'required|boolean',

    ];

    protected $validationCustomRules = [
        'name.required' => 'Il nome del piatto é obbligatorio',
        'name.min' => 'Il nome del piatto deve essere di almeno 3 caratteri',
        'name.regex' => 'Il nome del piatto puó contenere solo a-z, A-Z, 0-9',
        'image.required' => 'L\'immagine del piatto é obbligatoria',
        'image.max' => "L'immagine deve avere una dimensione massima di 512 KB",
        'image.uploaded' => 'Impossibile caricare il file',
        'ingredients.required' => 'Gli ingredienti sono obbligatori',
        'ingredients.min' => 'Gli ingredienti devono essere di almeno 5 caratteri ',
        'ingredients.regex' => 'Gli ingredienti possono contenere solo a-z, A-Z',
        'price.required' => 'Il prezzo é obbligatorio',
        'price.numeric' => 'Il prezzo deve essere obbligatoriamente un numero',
        'price.regex' => 'Il prezzo puó contenere solo numeri',
        'price.min' => 'Il prezzo deve essere di almeno 0.10',
        'price.max' => 'Il prezzo deve essere inferiore a 99.99',
        'visible.required' => 'Scegliere obbligatoriamente una delle due opzioni',
        'visible.boolean' => 'Il valore selezionato non é valido',
    ];

    protected $imageValidation = [
        'image' => 'image|file|size:512|mimes:jpeg,bmp,png,jpg|required',
    ];

    protected $imageValidationMessages = [
        'image.image' => 'Il formato inserito non é un\'immagine',
        'image.mimes' => 'Il formato dell\'immagine puó essere solo jpeg,bmp,png,jpg',
        'image.required' => 'L\'immagine é obbligatoria',
        'image.file' => 'File non valido',
        'image.uploaded' => 'Impossibile caricare il file',
        'image.size' => 'L\'immagine deve avere una dimensione massima di 512kb',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::where('restaurant_id', Auth::id())->paginate(6);
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dish = new Dish();
        $route = route('admin.dishes.store');
        $method = 'POST';
        return view('admin.dishes.create&edit', compact(['dish', 'route', 'method']));
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

        $validatedDate = $request->validate($this->validationRules, $this->validationCustomRules);

        $newDish = new Dish();
        $data['restaurant_id'] = Auth::id(); 
        $data['image'] = Storage::put('uploads', $data['image']);
        $newDish->fill($data);
        $newDish->save();
        return redirect()->route('admin.dishes.index')->with('create', $data['name'] . ' ' . 'è stato creato con successo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $dish = Dish::findOrFail($id);
        $route = route('admin.dishes.update', $dish->id);
        $method = 'PUT';
        return view('admin.dishes.create&edit', compact(['dish', 'route', 'method']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $validatedDate = $request->validate($this->validationRules, $this->validationCustomRules);

        $dish = Dish::findOrFail($id);
        $data['restaurant_id'] = Auth::id(); 
        $data['image'] = Storage::put('uploads', $data['image']);
        // dd($data);
        $dish->fill($data);
        $dish->save();
        return redirect()->route('admin.dishes.index', $dish->id)->with('edit', $data['name']. ' ' . 'è stato modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);
        $dish->delete();
        return redirect()->route('admin.dishes.index')->with('delete', $dish->name . ' ' . 'è stato spostato nel cestino');
    }

    public function softDeleted(){
        $dishes = Dish::onlyTrashed()->paginate(6);
        return view('admin.dishes.deleted', compact('dishes'));
    }

    public function restore($id){
        $dish = Dish::onlyTrashed()->findOrFail($id);
        $dish->restore();
        return redirect()->route('admin.dishes.index')->with('restore', $dish->name . ' ' . 'è stato ripristinato con successo');
    }

    public function hardDeleted($id){
        $dish = Dish::onlyTrashed()->findOrFail($id);
        $dish->forceDelete();
        return redirect()->route('admin.dishes.deleted', compact('dish'))->with('delete', $dish->name . ' ' . 'è stato eliminato con successo');
    }
}
