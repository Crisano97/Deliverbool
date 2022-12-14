@extends('layouts.app')

@section('content')
    <div class="form_page">
        <div class="container py-4">
            @if (session('delete'))
                <div class="alert alert-danger">
                    <span>
                        {{ session('delete') }}
                    </span>
                </div>
            @endif
            <div class="row col-sm-12 d-flex justify-content-around py-4">
                <div>
                    <h1 class="text-white">Cestino</h1>
                </div>
                <div class="text-right pt-1">
                    <a class="btn btn-primary" href="{{ route('admin.dishes.index') }}">
                        I tuoi piatti
                    </a>
                </div>
            </div>
            <div class="custom_padding">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
                    @forelse ($dishes as $dish)
                        <div class="p-2">
    
                            <div class="card mb-3 dish-container ">
                                <div class="row">
                                    <div class=" col-10 col-md-12 col-lg-4 mx-auto mt-3">
                                        @if (substr($dish->image, 0, 4) === 'http')
                                            <img class="img-fluid" src="{{ $dish->image }}" alt="{{ $dish->name }}">
                                        @else
                                            <img class="img-fluid" src="{{ asset('storage/uploads/' . $dish->image) }}"
                                                alt="{{ $dish->name }}">
                                        @endif
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
                                                <form action="{{ route('admin.dishes.hardDeleted', $dish->id) }}"
                                                    method="POST" class="d-inline delete-dishes ml-3">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="my_btn">
                                                        <div class="btn_container">
                                                            <img class="img-btn" src="{{ asset('assets/images/delete.png') }}"
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
                        <div class="d-flex align-items-center ">
                            <h3 class="text-white card_style p-4">Non ci sono piatti presenti nel cestino</h3>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $dishes->links() }}
            </div>
        </div>
    </div>
@endsection
