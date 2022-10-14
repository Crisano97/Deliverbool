<div class="container">
    <div class="row">
        <div class="w-75 mx-auto">
            <h1 class="text-center text-white py-3">
                Inserisci i dettagli del tuo ristorante !
            </h1>

            <div class="container form_content p-5 rounded-5 my-2 ">
                <form action="{{ route('admin.restaurants.store') }}" method="post"
                    class="text row row-cols-1 justify-content-center">
                    @csrf
                    @method('POST')
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="form-label">Nome Attivitá *</label>
                        <input type="text" value="{{ old('name', $restaurantForm->name) }}"
                            class="form-control text_form" id="exampleFormControlInput1" placeholder="Nome Attiviá"
                            name="name">
                        <small id="emailHelp" class="form-text text-muted">Inserisci più di 3 caratteri (a-z,
                            A-Z)</small>
                        @error('name')
                            <p class="text-danger fs-6">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Indirizzo *</label>
                        <input type="text" value="{{ old('address', $restaurantForm->address) }}"
                            class="form-control text_form" id="exampleFormControlInput1" placeholder="Via Casa Micco"
                            name="address">
                        @error('address')
                            <p class="text-danger fs-6">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Partita Iva *</label>
                        <input type="text" value="{{ old('p_iva', $restaurantForm->p_iva) }}"
                            class="form-control text_form" id="exampleFormControlInput1" placeholder="12345678901"
                            name="p_iva">
                        <small id="emailHelp" class="form-text text-muted">La Partita Iva può contenere solo numeri
                            (e.g. 12345678901)</small>
                        @error('p_iva')
                            <p class="text-danger fs-6">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Scegli la tu immagine</label>
                        <input type="text" value="{{ old('image', $restaurantForm->image) }}"
                            class="form-control text_form" id="exampleFormControlInput1" name="image">
                        @error('image')
                            <p class="text-danger fs-6">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Seleziona almeno una delle categorie:
                        *</label>
                    <div class="mb-3 row row-cols-1 row-cols-md-3 row-cols-lg-4">
                        @foreach ($categories as $category)
                            <div class="form-check form-switch">
                                @if ($errors->any())
                                    <input type="checkbox" name="categories[]" id="input-categories"
                                        class="form-check-input" value="{{ $category->id }}"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                @else
                                    <input type="checkbox" name="categories[]" id="input-categories"
                                        class="form-check-input" value="{{ $category->id }}"
                                        {{ $restaurantForm->categories->contains($category) ? 'checked' : '' }}>
                                @endif
                                <label for="input-categories" class="form-check-label">{{ $category->name }}</label>
                            </div>
                        @endforeach
                        {{-- @include('admin.posts.includes.errors', ['value' => 'categories']) --}}
                        @error('categories')
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
