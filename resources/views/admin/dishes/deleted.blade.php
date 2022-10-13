@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row col-sm-12 d-flex justify-content-around">
            <div>
                <h1>Cestino</h1>
            </div>
            {{-- <div class="text-right pt-1">
                <a class="btn btn-primary" href="{{ route('admin.dishes.restore') }}">
                    Ripristina
                </a>
                <a class="btn btn-primary" href="{{ route('admin.dishes.destroy') }}">
                    Elimina
                </a>
            </div> --}}
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
            @forelse ($dishes as $dish)
                <div class="p-2">

                    <div class="card mb-3 dish-container ">
                        <div class="row">
                            <div class=" col-10 col-md-12 col-lg-4 mx-auto mt-3">
                                <img class="img-fluid" src="{{ $dish->image }}" alt="{{ $dish->name }}">
                            </div>
                            <div class="col-10 col-md-12 col-lg-8">
                                <div class="card-body">
                                    <div class="dish-info">
                                        <h5>{{ $dish->name }}</h5>
                                        <p>Ingredienti: {{ $dish->ingredients }}</p>
                                        <p>Prezzo: {{ $dish->price }}</p>
                                        <div class="d-flex">
                                            <p>
                                                Disponibile: {{ $dish->visible ? 'Si' : 'No' }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <form action="{{ route('admin.dishes.restore', $dish->id) }}" method="POST"
                                            class="d-inline delete-dishes ml-3">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="my_btn">
                                                <div class="btn_container">
                                                    <img class="img-btn" src="{{ asset('assets/images/restore.png') }}"
                                                        alt="">
                                                </div>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Non ci sono piatti presenti nel tuo menu</p>
            @endforelse
        </div>
    </div>
@endsection
