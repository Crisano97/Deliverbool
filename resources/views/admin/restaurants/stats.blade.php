@extends('layouts-chart.chart')
<script src="{{ asset('js/app.js') }}" ></script>

@section('script-content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="text-center">
            <h1>Statistiche</h1>
        </div>

        <div class="chart-container" style="position: relative; width:80vw">
            <canvas id="ordersChart"></canvas>
            <canvas id="myChart" class="pt-5"></canvas>
        </div>
    </div>
</div>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const cty = document.getElementById('ordersChart').getContext('2d');
    
    const data = {!! json_encode($orders) !!}
    const months = {
        '01': 'Gennaio',
        '02': 'Febbraio',
        '03': 'Marzo',
        '04': 'Aprile',
        '05': 'Maggio',
        '06': 'Giugno',
        '07': 'Luglio',
        '08': 'Agosto',
        '09': 'Settembre',
        '10': 'Ottobre',
        '11': 'Novembre',
        '12': 'Dicembre',
    }
    const chartLabels = []
    const chartData = []
    const NumberOrders = []
    data.forEach(element => {
        label = months[element.months.substring(5)] + ' ' + element.months.substring(0, 4)
        chartLabels.push(label)
        chartData.push(element.sums)
        NumberOrders.push(element.orders)
    });
    console.log(chartData)
  
    const myOrdersChart = new Chart(cty, {
        responsive: true,
        type: 'bar',
        data: {
            labels: chartLabels,
            datasets: [
                {
                label: 'Numero ordini',
                data: NumberOrders,
                backgroundColor: [ 'rgba(117, 141, 117, 0.5)' ],
                borderColor: [
                    '#ffbd59',
                ],
                borderWidth: 2
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const myChart = new Chart(ctx, {
        responsive: true,
        type: 'bar',
        data: {
            labels: chartLabels,
            datasets: [
                {
                label: 'Fatturato',
                data: chartData,
                backgroundColor: [ 'rgba(117, 141, 117, 0.5)' ],
                borderColor: [
                    '#ffbd59',
                ],
                borderWidth: 2
                }
            ]
        },
        options: {
            elements: {
                line: {
                    tension: 0.2
                }
            }
        }
    });
</script>
@endsection
