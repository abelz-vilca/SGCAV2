@extends('layouts.plantilla')

@section('name')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Calificación", { role: "style" } ],
      ["OBSTETRICIA", 257, "#b87333"],
      ["EDUCACIÓN FÍSICA", 241, "silver"],
      ["DERECHO", 207, "gold"],
      ["EDUCACIÓN INICIAL", 192, "color: #e5e4e2"],
      ["ING. AGRÍCOLA", 186, "#b87333"],
      ["ED. SEC.Matemática Física e Informática", 184, "silver"],
      ["ING. QUÍMICA", 184, "gold"],
      ["ING. AGROINDUSTRIAL", 184, "color: #e5e4e2"],

      ["MED. VETERINARIA", 178, "#b87333"],
      ["ING. EN IND. ALIMENTARIAS", 177, "silver"],
      ["ING. AGRONOMÍA", 170, "gold"],
      ["ENFERMERÍA", 170, "color: #e5e4e2"],
      ["ED. SEC. Lengua Española y Literatura con mencion en comunicación", 163, "#b87333"],
      ["ING. DE MINAS", 154, "silver"],
      ["ING. AGROFORESTAL", 148, "gold"],
      ["ING. CIVIL", 147, "color: #e5e4e2"],
      ["ED. PRIMARIA", 143,"gold"],

    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      title: "Porcentaje de Avance de los Programas de Estudios - 2018 - UNSCH",
      width: 900,
      height: 600,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
}
</script>
<div id="columnchart_values" style="width: 900px; height: 600px;"></div>

@endsection