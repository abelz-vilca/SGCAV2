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
      ['Language', 'Rating'],
      ['PHP', 79],
            ['OBTETRICIA', 247],
            ['Swift', 68],
            ['SQL', 56],
            ['Java', 45],
            ['Perl', 45],
            ['Ruby', 35],
            ['Python', 30],
            ['AngularJS', 29],
            ['Node.js', 28],
            ['Objective-C', 19],
            ['C#', 17],
            ['C++', 15],
            ['C', 14]
    ]);

    var options = {
      title: 'Most Popular Programming Languages',
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