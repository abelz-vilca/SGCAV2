@extends('layouts.plantilla')

@section('name')
<?php


$programa01;


?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  
  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Programa de Estudios', 'avance de Estandar'],
      [' INGENIERÍA CIVIL', 79],
            ['OBTETRICIA', 247],
            ['INGENIERÍA AGRONOMÍA', 68],
            [' INGENIERÍA AGRÍCOLA', 56],
            [' INGENIERÍA AGROFORESTAL', 45],
            [' MEDICINA VETERINARIA', 45],
            [' EDUCACIÓN INICIAL', 35],
            [' EDUCACIÓN PRIMARIA', 30],
            [' DERECHO', 29],
            [' ECONOMÍA', 28],
            [' CONTABILIDAD Y AUDITORÍA', 19],
            [' EDUCACIÓN FÍSICA', 17],
            [' CIENCIAS DE TRABAJO SOCIAL', 15],
            ['INGENIERÍA DE SISTEMAS', 14]
    ]);

    var options = {
      title: 'Ranking de reporte de los Programas de Estudios',
      width: '100%',
      height: '500px'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
  
  

</script>
<div id="piechart" style="width: 900px; height: 500px;"></div>

<div id="chart">
  <div id="chart_div"></div>
</div>
@endsection