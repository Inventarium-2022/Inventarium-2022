@extends('layouts.default')
@section('content')
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Relatórios</h1>
            </div>
            <div id="myChart" style="max-width:1000px; height:400px"></div>
        </div>
    </div>
    <script>
         google.charts.load('current',{packages:['corechart']});
         google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Vendas', 'Qtd'],
                <?php

                    foreach ($products as $key => $value) {
                        echo '['."'$value[1]'".','.$value[0]."],\n\n";
                    }
                    
                ?>
            ]);

            var options = {
                title: 'Relatório de vendas',
                isStacked: false
            };

            var chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);

        }
    </script>
</section>
@endsection