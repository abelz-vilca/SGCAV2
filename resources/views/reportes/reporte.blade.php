@extends('layouts.plantilla')
@section('name')

<div ><i class="fas fa-align-center    "></i>
<?php

echo"<br/><br/>";
echo"Factores del Porgrama de Estudios</br>";

$programas;
$factor1;
$factor2;
$factor3;
$factor4;
$factor5;
$factor6;
$factor7;
$factor8;
$factor9;
$factor10;

?>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">

  google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([

        ['FACTORES', 'facto1','facto2','facto3','facto4','facto5','facto6','facto7','facto8','facto9','facto10'],
          ['2019', <?php echo $factor1 ?>, <?php echo $factor2 ?>, <?php echo $factor3 ?>, <?php echo $factor4 ?>,
          <?php echo $factor5 ?>, <?php echo $factor6 ?>, <?php echo $factor7 ?>, <?php echo $factor8 ?>, <?php echo $factor9 ?>,
          <?php echo $factor10 ?>],
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
  <h4>Programa de estudios</h4>
  <p><input disabled="disabled" class="form-control" type="text"  value="{{$programas->nombre_programa}}">
    </p>
</div>
</div>


@endsection