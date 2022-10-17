@extends('layouts.app')

@section('content')
    <div class="form_page">
        <div class="container py-4">
            @if (session('restore'))
                <div class="alert alert-success">
                    <span>
                        {{ session('restore') }}
                    </span>
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    <span>
                        {{ session('delete') }}
                    </span>
                </div>
            @endif
            @if (session('edit'))
                <div class="alert alert-warning">
                    <span>
                        {{ session('edit') }}
                    </span>
                </div>
            @endif
            @if (session('create'))
                <div class="alert alert-success ">
                    <span>
                        {{ session('create') }}
                    </span>
                </div>
            @endif
            <div class="row col-sm-12 d-flex justify-content-around py-4">
                <div>
                    <h1 class="text-white">Elenco dei piatti</h1>
                </div>
                <div class="text-right pt-1">
                    <a class="btn btn-primary" href="{{ route('admin.dishes.create') }}">
                        Aggiungi
                    </a>
                    <a class="btn btn-primary" href="{{ route('admin.dishes.deleted') }}">
                        Cestino
                    </a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
                @forelse ($dishes as $dish)
                    <div class="p-2">

                        <div class="card mb-3 dish-container ">
                            <div class="row">
                                <div class=" col-10 col-md-12 col-lg-4 mx-auto mt-3">
                                    <img class="img-fluid" src="{{ asset('storage/' . $dish->image )}}" alt="{{ $dish->name }}">
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
                                            <div class="btn_container">
                                                <a href="{{ route('admin.dishes.edit', $dish->id) }}">
                                                    <button type="submit" class="my_btn">
                                                        <div class="btn_container">
                                                            <img class="img-btn"
                                                                src="{{ asset('assets/images/pencil.png') }}"
                                                                alt="">
                                                        </div>
                                                    </button>
                                                </a>
                                            </div>
                                            <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST"
                                                class="d-inline ml-3">
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
                    <h3 class="text-white text-center">Non ci sono piatti presenti nel tuo menu</h3>
                @endforelse
            </div>
            <div class="d-flex justify-content-center">
                {{ $dishes->links() }}
            </div>
        </div>
    </div>
@endsection
