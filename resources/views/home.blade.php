@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 style="text-align: center;">Pontuação Gincana PSJE</h2></div>
                <div class="card m-b-20">
                    <canvas id="myChart" width="800" height="400" style="background-color: gainsboro;"></canvas>
                </div>
            </div>
        </div>
        @php
            $v1 = 60;
            $v2 = 10;
            $v3 = 30;
            $v4 = 0;
            $v5 = 10;
            $v6 = 0;
            $v7 = 10;
            $v8 = 0;
        @endphp
    </div>
</div>
<script src="{{asset('chartjs/chart.min.js')}}"></script>
<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['São Bento', 'Santo Afonso', 'São Gabriel', 'Santo Agostinho',
                     'São Rafael', 'São Sebastião', 'São Miguel', 'São Domingos Sávio'],
            datasets: [{
                label: 'Pontuação',
                data: [ "<?php echo $v1;?>", "<?php echo $v2;?>",
                        "<?php echo $v3;?>", "<?php echo $v4;?>",
                        "<?php echo $v5;?>", "<?php echo $v6;?>",
                        "<?php echo $v7;?>", "<?php echo $v8;?>"],
                backgroundColor: [
                    'RGBA( 0, 0, 0, 1 )',
                    'RGBA( 138, 43, 226, 1 )',
                    'RGBA( 0, 0, 255, 1 )',
                    'RGBA( 178, 34, 34, 1 )',
                    'RGBA( 0, 128, 0, 1 )',
                    'RGBA( 255, 215, 0, 1 )',
                    'RGBA( 255, 140, 0, 1 )',
                    'RGBA( 255, 255, 255, 1 )'
                ],
                borderColor: [
                    'RGBA( 0, 0, 0, 1 )',
                    'RGBA( 138, 43, 226, 1 )',
                    'RGBA( 0, 0, 255, 1 )',
                    'RGBA( 178, 34, 34, 1 )',
                    'RGBA( 0, 128, 0, 1 )',
                    'RGBA( 255, 215, 0, 1 )',
                    'RGBA( 255, 140, 0, 1 )',
                    'RGBA( 169, 169, 169, 1 )'
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                autocolors: false,
                annotation: {
                    annotations: {
                        box1: {

                            type: 'box',
                            xMin: 0.5,
                            xMax: 1.5,
                            yMin: 0,
                            yMax: 2
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
        plugins: ['chart-plugin-annotation']

    });
    </script>

@endsection
