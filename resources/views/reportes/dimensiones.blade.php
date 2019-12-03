@extends('layouts.plantilla')
@section('name')

<?php

echo"<br/><br/>";
echo"Dimensiones del Porgrama de Estudios de: {$programas->nombre_programa}</br>";

$programas;
$dimension1;
$dimension2;
$dimension3;
$dimension4;

?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([

        ['DIMENSIONES del PE', 'Dimension1','Dimension2','Dimension3','Dimension4'],
          ['2019', <?php echo $dimension1 ?>, <?php echo $dimension2 ?>, <?php echo $dimension3 ?>, <?php echo $dimension4 ?>],
                        ]);
               var options = {
          chart: {
                     }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, options);
      }
</script>
<div id="columnchart_material" style="width: 900px; height: 500px;"></div>

<div>
    <h4 type="color" value="#ff0000">Programa de Estudios (PE)</h4>
    <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas->nombre_programa}}">
    </p>
</div>
@endsection