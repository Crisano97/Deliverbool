@extends('layouts.app')

@section('content')
    <div class="form_page">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center custom_padding">
                <div class="col-md-12  align-self-center">
                    <div class="form_content p-5">
                        <h2 class="card_header text-center ">Benvenuto/a in DELIVEBOOL</h2>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome') }}
                                        *</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" minlength="5" required autocomplete="name" autofocus
                                            >

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <small id="emailHelp" class="form-text text-muted">Inserisci più di 5 caratteri
                                            (a-z, A-Z)</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Indirizzo E-Mail') }} *</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" 
                                            pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$"
                                        >
                                             
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <small id="emailHelp" class="form-text text-muted">(e.g.
                                            nomeutente@gmail.com)</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}
                                        *</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" v-model="password" minlength="8" type="password"
                                            v-on:keyup="checkPassword" >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <small id="emailHelp" class="form-text text-muted">La password deve contenere almeno
                                            8 caratteri</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Conferma Password') }}
                                        *</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            v-model="password_confirm" v-on:keyup="checkPassword" minlength="8" type="password"
                                        >
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-4 offset-md-7 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary" onclick="controlPassword()">
                                            {{ __('Registrati') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function controlPassword(){
        const password = document.getElementById('password');
        const confirm = document.getElementById('password-confirm');
        if (confirm.value != password.value) {
            // aggiungere div in display none
            window.swal('Le password non coincidono')
            confirm.value = '';
        }
    }

    </script>
@endsection
