@extends('layouts.app')

@section('content')
    <div class="container my-5">
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
                                <h4 class="mt-2">Modifica immagine:</h4>
                                <div class=" row m-3 flex-column text-center">
                                    <form action="{{ route('admin.restaurants.update', $restaurant->id) }}" method="POST"
                                        class="">
                                        @csrf
                                        @method('PATCH')
                                        <input type="text" name="image" value="{{ old('image', $restaurant->image) }}"
                                            placeholder="Inserisci immagine" class="col-10">
                                        <button class="btn btn-primary">Carica</button>
                                    </form>
                                    <form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST"
                                        class="d-inline " id="delete-method">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-lg btn-danger mt-2">Cancella</button>
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
                            <a class="btn btn-primary ml-3" href="{{ route('admin.restaurants.create') }}">
                                +
                            </a>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- SCRIP SECTION --}}
@section('script-content')
    <script>
        const deleteElement = document.getElementById('delete-method');


        deleteElement.addEventListener('submit', function(event) {
            event.preventDefault();
            const result = window.confirm(`vuoi eliminare l'elemento ?`);
            if (result) this.submit();
        })
    </script>
@endsection
