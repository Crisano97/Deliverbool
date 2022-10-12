@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <div class="col-12 col-md-6 card p-3 rounded-lg">
                                <h3>La Tua Immagine</h3>
                                <img class="img-fluid" src="{{ $restaurant->image }}" alt="">
                                <div class="text-right m-3">
                                    <form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST"
                                        class="d-inline delete-comics">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-lg btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">

                                <h3>Le tue Informazioni</h3>

                                <div class="mt-2 card p-2 info">
                                    <h5>Nome:{{ $restaurant->name }}</h5>
                                </div>
                                <div class="mt-2 card p-2 info">
                                    <h5>Partita IVA: IT{{ $restaurant->p_iva }}</h5>
                                </div>
                                <div class="mt-2 card p-2 info">
                                    <h5>Indirizzo:{{ $restaurant->address }}</h5>
                                </div>
                                <div class="mt-2 card p-2 info">
                                    <h5>Categorie :</h5>
                                    @foreach ($restaurant->categories as $category)
                                        <span>{{ $category->name }} ;</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-5">
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
                            <div class="col-12 col-md-6 mt-5">
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
                            <h3>Aggiungi qui il tuo ristorante</h3>
                            <a class="btn btn-primary" href="{{ route('admin.restaurants.create') }}">
                                Create new post
                            </a>
                        @endforelse
                    </div>
                </div>

                {{-- <table class="table table-striped">
                    <thead>
                        <th>Nome Attivita</th>
                        <th>P.IVA</th>
                        <th>Indirizzo</th>
                        <th>Immagine</th>
                        <th>
                            <a class="btn btn-primary" href="{{ route('admin.restaurants.create') }}">
                                Create new post
                            </a>
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->name }}</td>
                                <td>IT{{ $restaurant->p_iva}}</td>
                                <td>{{ $restaurant->address }}</td>
                                <td>{{ $restaurant->image }}</td>

                                <td>
                                    @foreach ($restaurant->categories as $category)
                                        <span>{{ $category->name }} ;</span>
                                    @endforeach
                                </td>
                                {{-- <td>
                                    <span>  
                                        @if (isset($post->tags))
                                            @foreach ($post->tags as $tag)
                                                #{{ $tag->name }}
                                            @endforeach
                                        @else
                                            no tag
                                        @endif
                                    </span>
                                </td> --}}


                {{-- </tr>
                @empty
                    <tr>
                        <td colspan=7>non sono disponibili restaurant</td>
                    </tr>
                    @endforelse
                    </tbody>
                    </table> --}}
            </div>
        </div>
    </div>
@endsection
