@extends('layouts.app')

@section('content')
    <div class="container my-5">
        {{-- <h1 class="text-center">I nostri piatti</h1> --}}
        <a class="btn btn-primary" href="{{ route('admin.dishes.create') }}">
            Aggiungi un nuovo piatto
        </a>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
            @forelse ($dishes as $dish)
                <div class="p-2">
                    <div class="card p-2">
                        <img src="{{ $dish->image }}" class="card-img-top" alt="{{ $dish->name }}">
                        <div class="card-body text-center">
                            <h5>{{ $dish->name }}</h5>
                            <p>Ingredienti: {{ $dish->ingredients }}</p>
                            <p>Prezzo: {{ $dish->price }}</p>
                            <p>{{ $dish->visible ? 'Prodotto disponibile' : 'Prodotto non disponibile' }}
                            </p>
                        </div>
                        <div class="text-right">
                            <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-success">edit</a>
                            <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline delete-dishes">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>Non ci sono piatti presenti nel tuo menu</p>
            @endforelse
        </div>
    </div> 
@endsection   