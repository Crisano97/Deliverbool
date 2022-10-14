@extends('layouts.app')

@section('content')
    <div class="container my-5">
        @foreach ($restaurants as $restaurant)
            <h1>{{ $restaurant->name }}</h1>
        @endforeach
        <h5>Lista ordini ricevuri</h5>
        <div class="row">

            <div class="col-12">
                @forelse ($orders as $order)
                    <div class="card p-3 mt-3">
                        <h5>
                            Ordine n* {{ $order->order_code }}
                        </h5>
                        <h5>
                            Data Ordine: {{ $order->order_date }}
                        </h5>
                        <h5>
                            Totale Incassato: {{ $order->total_price }} €
                        </h5>
                        <h5>
                            Dati acquirente: {{ $order->customer_name }}, {{ $order->customer_phone_number }}
                        </h5>
                        <h5>
                            Indirizzo di consegna: {{ $order->customer_address }}
                        </h5>
                        <h5>
                            Piatti ordinati:
                            @foreach ($order->dishes as $dish)
                                {{ $dish->pivot->amount }}x {{ $dish->name }} -
                            @endforeach
                        </h5>
                    </div>
                @empty
                    NON SONO STATI RILEVATI NUOVE ORDINI
                @endforelse

            </div>

        </div>
    </div>
@endsection
