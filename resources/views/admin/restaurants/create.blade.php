@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <main >
                    <h1 class="text-center text-white">
                        Compila il nostro form per iscriverti !
                    </h1>
                    
                    <div class="container from-content p-5 rounded-5 my-2 ">
                        <form action="{{ route('admin.restaurants.store') }}" method="post" class="text row row-cols-1 row-cols-md-2 row-cols-lg-3" >
                            @csrf
                            @method('POST')
                            <div class="mb-3 ">
                                <label for="exampleFormControlInput1" class="form-label">Nome Attivitá</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Attiviá" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Indirizzo</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Via Casa Micco" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Partita Iva</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="P.Iva" name="p_iva">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Scegli la tu immagine</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="image">
                            </div>
                            <div class="mb-3">
                                @foreach ($categories as $category)
                                    <div class="form-check form-switch">
                                        {{-- @if ($errors->any())
                                            <input type="checkbox" name="categories[]" id="input-categories" class="form-check-input" value="{{ $category->id }}"
                                            {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                        @else --}}
                                            <input type="checkbox" name="categories[]" id="input-categories" class="form-check-input" value="{{ $category->id }}"
                                            {{ $restaurant->categories->contains($category) ? 'checked' : '' }}>
                                        {{-- @endif --}}
                                        <label for="input-categories" class="form-check-label">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                                {{-- @include('admin.posts.includes.errors', ['value' => 'categories']) --}}
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
            
                </main>
            </div>
        </div>
    </div>
@endsection