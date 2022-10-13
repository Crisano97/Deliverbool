@extends('layouts.app')

@section('content')
<div class="form_page">
    <div class="container ">
        <div class="row">
            <div class="w-75 mx-auto">
                    <h1 class="text-center text-white py-3">
                        Compila il nostro form per iscriverti !
                    </h1>
                    
                    <div class="container from-content p-5 rounded-5 my-2 ">
                        <form action="{{ $route }}" method="post" class="text row row-cols-1 justify-content-center" >
                            @csrf
                            @method($method)

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome Piatto</label>
                                <input type="text" value="{{ old('name', $dish->name )}}" class="form-control" id="exampleFormControlInput1" placeholder="Nome Piatto" name="name">
                                @error('name')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ingredienti</label>
                                <input type="text" value="{{ old('ingredients', $dish->ingredients )}}" class="form-control" id="exampleFormControlInput1" placeholder="Carne, pomodoro, mozzarella..." name="ingredients">
                                @error('ingredients')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
                                <input type="number" step="0.01" value="{{ old('price', $dish->price )}}" class="form-control" id="exampleFormControlInput1" placeholder="0.00" name="price">
                                @error('price')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Scegli la tu immagine</label>
                                <input type="text" value="{{ old('image', $dish->image )}}" class="form-control" id="exampleFormControlInput1" name="image">
                                @error('image')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="radio-input-false" class="form-label">Prodotto non disponibile</label>
                                <input type="radio" value="0" name="visible" id="radio-input-false"
                                {{ old('visible', $dish->visible) == false ? 'checked' : ''}}>

                                <label for="radio-input-true" class="form-label" id="radio-input-false">Prodotto disponibile</label>
                                <input type="radio" value="1" name="visible"
                                {{ old('visible', $dish->visible) == true ? 'checked' : ''}}>
                                @error('visible')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-xl">Submit</button>
                            </div>
                        </form>
                    </div>
            
                
            </div>
        </div>
    </div>
</div>
@endsection