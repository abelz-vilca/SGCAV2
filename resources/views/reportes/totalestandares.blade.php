@extends('layouts.plantilla')
@section('name')

<?php
echo"<br/><br/>";
echo"AVANCE DE ESTANDARES DE LOS PROGRAMAS DE ESTUDIOS UNSCH-2019</br>";
$programas; $programa01; $programa02; $programa03; $programa04; $programa05;
$programa06; $programa07; $programa08; $programa09; $programa10; $programa11;
$programa12; $programa13; $programa14; $programa15; $programa16; $programa17;
$programa18; $programa19; $programa20; $programa21; $programa22; $programa23;
$programa24; $programa25; $programa26; $programa27; $programa28; $programa29;
$programa30; $programa31; $programa32; $programa33;

?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([

          [' AVANCE ESTANDARES DE LOS PROGRAMAS 2019','INGENIERÍA AGRONOMÍA','INGENIERÍA AGRÍCOLA','INGENIERÍA AGROFORESTAL',
          'MEDICINA VETERINARIA','ESCUELA PROFESIONAL DE BIOLOGÍA','EDUCACIÓN INICIAL','EDUCACIÓN PRIMARIA',
          'EDUCACIÓN SECUNDARIA-Ingles y Lengua Española', 'EDUCACIÓN SECUNDARIA-Matemática Física e Informática',
          'EDUCACIÓN SECUNDARIA-Ciencias Sociales y Filosofia con mencion en Turismo',
          'EDUCACIÓN SECUNDARIA-Lengua Española y Literatura con mencion en comunicación',
          'EDUCACIÓN FÍSICA', 'ADMINISTRACIÓN DE EMPRESAS', 'CONTABILIDAD Y AUDITORÍA','ECONOMÍA',
          'CIENCIAS DE LA COMUNICACIÓN','CIENCIAS DE ARQUEOLOGÍA E HISTORIA','CIENCIAS DE ANTROPOLOGÍA SOCIAL',
          'CIENCIAS DE TRABAJO SOCIAL','DERECHO','INGENIERÍA CIVIL','INGENIERÍA DE MINAS',
          'INGENIERÍA DE SISTEMAS','CIENCIAS FÍSICO MATEMÁTICAS-Estadistica','CIENCIAS FÍSICO MATEMÁTICAS-Matemática',
          'CIENCIAS FÍSICO MATEMÁTICAS-Física','INGENIERÍA QUÍMICA','INGENIERÍA EN INDUSTRIAS ALIMENTARIAS',
          'INGENIERÍA AGROINDUSTRIAL','MEDICINA HUMANA','FARMACIA Y BIOQUÍMICA','OBSTETRICIA','ENFERMERÍA'
               
        ],

          ['2019', 
          <?php echo $programa01 ?>,
          <?php echo $programa02 ?>,
          <?php echo $programa03 ?>,
          <?php echo $programa04 ?>,
          <?php echo $programa05 ?>,
          <?php echo $programa06 ?>,
          <?php echo $programa07 ?>,
          <?php echo $programa08 ?>,
          <?php echo $programa09 ?>,
          <?php echo $programa11 ?>,
          <?php echo $programa11?>,
          <?php echo $programa12 ?>,
          <?php echo $programa13 ?>,
          <?php echo $programa14 ?>,
          <?php echo $programa15 ?>,
          <?php echo $programa16 ?>,
          <?php echo $programa17 ?>,
          <?php echo $programa18 ?>,
          <?php echo $programa19 ?>,
          <?php echo $programa20 ?>,
          <?php echo $programa21 ?>,
          <?php echo $programa22 ?>,
          <?php echo $programa23 ?>,
          <?php echo $programa24 ?>,
          <?php echo $programa25 ?>,
          <?php echo $programa26 ?>,
          <?php echo $programa27 ?>,
          <?php echo $programa28 ?>,
          <?php echo $programa29 ?>,
          <?php echo $programa30 ?>,
          <?php echo $programa31 ?>,
          <?php echo $programa32 ?>,
          <?php echo $programa33 ?>,
          
        ],    ]);
                        
               
                  var options = {
          chart: {
                     }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, options);
      }
</script>
<div id="columnchart_material" style="width: 1500px; height: 600px;"></div>


@endsection