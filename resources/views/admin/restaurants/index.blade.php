@extends('layouts.app')

@section('content')
    <div class="form_page">
        <div class="container py-5">
            @if (session('create'))
                <div class="alert alert-success">
                    <span class="alert alert-success">
                        {{ session('create') }}
                    </span>
                </div>
            @endif
            @if (session('edit'))
                <div class="alert alert-warning">
                    <span class="alert alert-warning">
                        {{ session('edit') }}
                    </span>
                </div>
            @endif
            <div class="row">
                <div class="col-12">

                    @if (session('result-message'))
                        <div class="alert alert-{{ session('result-class-message') }}">
                            {{ session('result-message') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">

                            @forelse ($restaurants as $restaurant)
                                <div class="col-12 col-md-6 rounded-lg mb-3">
                                    <h3 class="text-white">La Tua Immagine</h3>
                                    <div class="card_style p-3">
                                        <img class="img-fluid" src="{{ $restaurant->image }}" alt="">
                                        <h4 class="mt-2">Modifica immagine:</h4>
                                        <div class=" row m-3 flex-column text-center">
                                            <form action="{{ route('admin.restaurants.update', $restaurant->id) }}"
                                                method="POST" class="">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" name="image"
                                                    value="{{ old('image', $restaurant->image) }}"
                                                    placeholder="Inserisci immagine" class="col-10">
                                                <button class="btn btn-primary">Carica</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">

                                    <h3 class="text-white">Le tue Informazioni</h3>

                                    <div class="mt-2 card_style p-2 info">
                                        <h5>Nome: {{ $restaurant->name }}</h5>
                                    </div>
                                    <div class="mt-2 card_style p-2 info">
                                        <h5>Partita IVA: IT{{ $restaurant->p_iva }}</h5>
                                    </div>
                                    <div class="mt-2 card_style p-2 info">
                                        <h5>Indirizzo: {{ $restaurant->address }}</h5>
                                    </div>
                                    <div class="mt-2 card_style p-2 info">
                                        <h5>Categorie:</h5>
                                        @foreach ($restaurant->categories as $category)
                                            <span>{{ $category->name }} ; </span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mt-2">
                                    <a href="{{ route('admin.dishes.index') }}">
                                        <div class="position-relative img-container mt-5">
                                            <img class="img-link "
                                                src="https://www.melarossa.it/wp-content/uploads/2020/11/migliori-cibi-top-50.jpg?x58780"
                                                alt="">
                                            <h1
                                                class="position-absolute fixed-top mt-5 text-white d-flex justify-content-center banner-link p-1 ">
                                                I tuoi piatti
                                            </h1>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 mt-2">
                                    <a href="{{ route('admin.dishes.index') }}">
                                        <div class="position-relative img-container mt-5">
                                            <img class="img-link"
                                                src="https://www.cartaincarta.it/public/Files/rif000002/997/food-delivery.jpg"
                                                alt="">
                                            <h1
                                                class="position-absolute fixed-top mt-5 text-white d-flex justify-content-center banner-link p-1 ">
                                                I tuoi ordini
                                            </h1>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div>
                                    @include('admin.restaurants.form')
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
