@extends('layouts.app')

@section('content')
    <div class="form_page">
        <div class="container py-5">
            @foreach ($restaurants as $restaurant)
                <h1 class="text-white">{{ $restaurant->name }}</h1>
            @endforeach
            <h5 class="text-white">
                <i class="fa-solid fa-cart-shopping icon"></i>
                Lista ordini ricevuti
            </h5>
            <div class="row">

                <div class="col-12">
                    @forelse ($orders as $order)
                        <div class="card p-3 mt-3">
                            <h3 class="pb-3">
                                <i class="fa-solid fa-paper-plane icon"></i>
                                <span class="font-weight-bolder">
                                    Ordine:
                                </span>
                                {{ $order->order_code }}
                            </h3>
                            <h5 class="border_order pt-2">
                                <i class="fa-regular fa-calendar icon"></i>
                                <span class="font-weight-bolder">
                                    Data Ordine:
                                </span>
                                {{ $order->order_date }}
                            </h5>
                            <h5 class="border_order pt-2">
                                <i class="fa-solid fa-sack-dollar icon"></i>
                                <span class="font-weight-bolder">
                                    Totale Incassato:
                                </span>
                                {{ $order->total_price }} €
                            </h5>
                            <h5 class="border_order pt-2">
                                <i class="fa-solid fa-user icon"></i>
                                <span class="font-weight-bolder">
                                    Dati acquirente:
                                </span>
                                {{ $order->customer_name }}, {{ $order->customer_phone_number }},
                                {{ $order->customer_email }}
                            </h5>
                            <h5 class="border_order pt-2">
                                <i class="fa-solid fa-location-dot icon"></i>
                                <span class="font-weight-bolder">
                                    Indirizzo di consegna:
                                </span>
                                {{ $order->customer_address }}
                            </h5>
                            <h5 class="border_order pt-2">
                                <i class="fa-solid fa-pizza-slice icon"></i>
                                <span class="font-weight-bolder">
                                    Piatti ordinati:
                                </span>
                                @foreach ($order->dishes as $dish)
                                    {{ $dish->pivot->amount }}x {{ $dish->name }} -
                                @endforeach
                            </h5>
                        </div>
                    @empty
                        <div class="vh-100 d-flex align-items-center">
                            <h3 class="text-white card_style p-4">NON SONO STATI RILEVATI NUOVE ORDINI</h3>
                        </div>
                    @endforelse

                </div>

            </div>
        </div>
    </div>
@endsection
