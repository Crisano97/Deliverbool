@extends('layouts.app')

@section('content')
    <div class="form_page">
        <div class="container py-4">
            <div class="row">
                <div class="w-75 mx-auto">
                    <h1 class="text-center text-white py-3">
                        Inserisci i dettagli del piatto !
                    </h1>

                    <div class="container form_content p-5 rounded-5 my-2 ">
                        <form action="{{ $route }}" method="post" class="text row row-cols-1 justify-content-center"
                            enctype="multipart/form-data">
                            @csrf
                            @method($method)

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome Piatto *</label>
                                <input type="text" value="{{ old('name', $dish->name) }}" class="form-control text_form"
                                    required id="exampleFormControlInput1" placeholder="Nome Piatto" name="name">
                                <small id="emailHelp" class="form-text text-muted">Inserisci più di 3 caratteri (a-z, A-Z,
                                    0-9)</small>
                                @error('name')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ingredienti *</label>
                                <input type="text" value="{{ old('ingredients', $dish->ingredients) }}" required
                                    class="form-control text_form" id="exampleFormControlInput1"
                                    placeholder="Carne, pomodoro, mozzarella..." name="ingredients">
                                <small id="emailHelp" class="form-text text-muted">Inserisci più di 3 caratteri (a-z, A-Z,
                                    0-9)</small>
                                @error('ingredients')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Prezzo *</label>
                                <input type="number" step="0.01" value="{{ old('price', $dish->price) }}" required
                                    class="form-control text_form" id="exampleFormControlInput1" placeholder="0.00"
                                    name="price">
                                <small id="emailHelp" class="form-text text-muted">Il prezzo può contenere solo numeri (0-9,
                                    e.g. 5.00)</small>
                                @error('price')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Scegli la tu immagine *</label>
                                <input type="file" value="{{ old('image', $dish->image) }}"
                                    class="form-control text_form" id="exampleFormControlInput1" name="image" required>
                                @error('image')
                                    <p class="text-danger fs-6">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="radio-input-false" class="form-label pt-2 mr-1 d-block">Seleziona la
                                    disponibilità:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <label for="radio-input-false" class="form-label pt-2 mr-1">Non disponibile</label>
                                    <input type="radio" value="0" name="visible" id="radio-input-false"
                                        class="mr-2" {{ old('visible', $dish->visible) == false ? 'checked' : '' }}
                                        required>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <label for="radio-input-true" class="form-label pt-2 mr-1"
                                        id="radio-input-false">Disponibile</label>
                                    <input type="radio" value="1" name="visible"
                                        {{ old('visible', $dish->visible) == true ? 'checked' : '' }} required>
                                </div>
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
