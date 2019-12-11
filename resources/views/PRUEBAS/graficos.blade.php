@extends('layouts.plantilla')

@section('name')

<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
    
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawStuff);
          google.charts.setOnLoadCallback(drawFactor);
          google.charts.setOnLoadCallback(drawDimension);
          google.charts.setOnLoadCallback(drawCarreras);
    
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawAvance);
    
          /*google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawCarreras);*/
    
    
    
          function drawAvance() {
    
            var data = google.visualization.arrayToDataTable([
              ['Descripcion', '% de Avance'],
              ['Finalizado',25],
    
              ["Sin Avance",50],
    
            ]);
    
            var options = {
              title: 'GRÁFICA GLOBAL DE LA UNHEVAL'
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
            chart.draw(data, options);
          }
    
          function drawCarreras() {
            var data = new google.visualization.arrayToDataTable([
    
              ['Carrera', 'Avance'],
                        [' CIENCIAS ADMINISTRATIVAS', 108.32],
                        ['TURISMO Y HOTELERIA', 81.44],
                        ['INGENIERÍA  AGRONÓMICA', 98.85],
                        ['INGENIERIA AGROINDUSTRIAL', 96.03],
                        ['CIENCIAS CONTABLES Y FINANCIERAS', 130.35],
                        ['ECONOMÍA', 90.41],
                        ['COMUNICACIÓN SOCIAL', 82.29],
                        ['SOCIOLOGIA', 108.41],
                        ['DERECHO Y CIENCIAS POLÍTICAS', 96.18],
                        ['BIOLOGIA, QUIMICA Y CIENCIAS DEL AMBIENTE', 66.59],
                        ['CIENCIAS HISTÓRICO SOCIALES Y GEOGRÁFICAS', 63.56],
                        ['EDUCACION INICIAL', 56.74],
                        ['EDUCACION FISICA', 61.62],
                        ['EDUCACIÓN PRIMARIA', 64.41],
                        ['FILOSOFIA, PSICOLOGIA Y CIENCIAS', 60.74],
                        ['LENGUA Y LITERATURA', 54.68],
                        ['MATEMATICA Y FISICA', 64.59],
                        ['ENFERMERIA', 110.35],
                        ['ARQUITECTURA', 81.94],
                        ['INGENIERIA CIVIL', 91.71],
                        ['INGENIERIA DE SISTEMAS', 107.26],
                        ['INGENIERIA INDUSTRIAL', 117.32],
                        ['MEDICINA HUMANA', 78.88],
                        ['ODONTOLOGIA', 92.53],
                        ['MEDICINA VETERINARIA', 88.26],
                        ['OBSTETRICIA', 98.47],
                        ['PSICOLOGIA', 121.88],
                        ['', 0],
                        ['Porcentaje Total',100],
                         
              
            ]);
    
    
            var options = {
            title: '% de Avance por Carreras Profesionales',
            isStacked: true,
            height:600,
            chartArea: {
              height:300,
              top:100,
            },
            hAxis: {
              title: 'Carreras Profesionales',
              titleTextStyle: {
                color: '#FF0000',            
              },
              
              slantedText:true,
              slantedTextAngle:45,
              
            },
            vAxis: {
              title: 'Porcentaje'
            }
          };
    
          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: "stringify",
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" }]);
    
          var chart = new google.visualization.ColumnChart(document.getElementById('carreras'));
          chart.draw(view, options);
        };
    
          function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
    
              ['Estandar', 'Avance'],
                        ['1.  PROPÓSITOS ARTICULADOS', 112.41],
                        ['2.  PARTICIPACIÓN DE LOS GRUPOS DE INTERÉS', 99.37],
                        ['3.  REVISIÓN PERIÓDICA Y PARTICIPATIVA DE LAS POLÍTICAS Y OBJETIVOS', 99.56],
                        ['4.  SOSTENIBILIDAD', 100.48],
                        ['5.  PERTINENCIA DEL PERFIL DE EGRESO', 67.33],
                        ['6.  REVISIÓN DEL PERFIL DE EGRESO', 55.78],
                        ['7.  SISTEMA DE GESTIÓN DE LA CALIDAD (SGC)', 132],
                        ['8.  PLANES DE MEJORA', 123],
                        ['9.  PLAN DE ESTUDIOS', 101.7],
                        ['10.  CARACTERÍSTICAS DEL PLAN DE ESTUDIOS', 140.78],
                        ['11.  ENFOQUE POR COMPETENCIAS', 56.37],
                        ['12.  ARTICULACIÓN CON I+D+I Y RESPONSABILIDAD SOCIAL', 71.22],
                        ['13.  MOVILIDAD', 106.78],
                        ['14.  SELECCIÓN, EVALUACIÓN, CAPACITACIÓN Y PERFECCIONAMIENTO', 83.19],
                        ['15.  PLANA DOCENTE ADECUADA', 52.93],
                        ['16.  RECONOCIMIENTO DE LAS ACTIVIDADES DE LABOR DOCENTE', 95.04],
                        ['17.  PLAN DE DESARROLLO ACADÉMICO', 81.26],
                        ['18.  ADMISIÓN AL PROGRAMA DE ESTUDIOS', 95.74],
                        ['19.  NIVELACIÓN DE INGRESANTES', 77.22],
                        ['20.  SEGUIMIENTO AL DESEMPEÑO DE LOS ESTUDIANTES', 71.52],
                        ['21.  ACTIVIDADES EXTRACURRICULARES', 114.96],
                        ['22.  GESTIÓN Y CALIDAD DE LA I+D+I REALIZADA POR DOCENTES', 113.59],
                        ['23.  I+D+I PARA LA OBTENCIÓN DEL GRADO Y EL TÍTULO', 141.3],
                        ['24.  PUBLICACIÓN DE LOS RESULTADOS DE I+D+I', 77.04],
                        ['25.  RESPONSABILIDAD SOCIAL', 78.56],
                        ['26.  IMPLEMENTACIÓN DE POLÍTICAS AMBIENTALES', 116.15],
                        ['27. BIENESTAR', 80.11],
                        ['28.  EQUIPAMIENTO Y USO DE LA INFRAESTRUCTURA', 74.56],
                        ['29.  MANTENIMIENTO DE LA INFRAESTRUCTURA', 79.3],
                        ['30.  SISTEMA DE INFORMACIÓN Y COMUNICACIÓN', 91.11],
                        ['31.  CENTRO DE INFORMACIÓN Y REFERENCIA', 68.15],
                        ['32.  RECURSOS HUMANOS PARA LA GESTIÓN DEL PROGRAMA DE ESTUDIOS', 30.59],
                        ['33.  LOGRO DE COMPENTENCIAS', 33.07],
                        ['34.  SEGUIMIENTO A EGRESADOS Y OBJETIVOS EDUCACIONALES', 67.11],
                        ['Porcentaje Total',100],
                         
              
            ]);
    
            var options = {
              chart: {
                title: 'Estandares',
                subtitle: 'Avance total por estandar.'
              },
              bar:{ groupWidth:'95%'},
              vAxis: {
                minValue: 0,
                maxValue: 100,
                format: '#\'%\''
              },
              columns:[0,1,2]
    
            };
    
          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: getValueAt.bind(undefined, 1),
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" }]);
    
          var chart = new google.visualization.ColumnChart(document.getElementById('dual_y_div'));
          chart.draw(view, options);
        };
    
          function drawFactor() {
            var data = new google.visualization.arrayToDataTable([
    
              ['Factor', 'Avance'],
                        ['1. Planificación del Programa de Estudios', 98.81],
                        ['2.  Gestión del Perfil de egreso', 57.19],
                        ['3.  Aseguramiento de la Calidad', 128],
                        ['4.  Proceso de Enseñanza - Aprendizaje', 88.81],
                        ['5.  Gestión de los Docentes', 74.85],
                        ['6.  Seguimiento a Estudiantes', 81],
                        ['7.  Investigación, Desarrollo Tecnológico e Innovación', 99.48],
                        ['8.  Responsabilidad Social Universitaria', 92.96],
                        ['9.  Servicios de Bienestar', 79.81],
                        ['10.  Infraestructura y Soporte', 74.89],
                        ['11.  Recursos Humanos', 30.59],
                        ['12.  Verificación del Perfil de Egreso', 50.81],
                        ['Porcentaje Total',100],
                         
              
            ]);
    
            var options = {
              chart: {
                title: 'Factor',
                subtitle: 'Avance total por factor.'
              },
              bar:{ groupWidth:'95%'},
              legend: { position: "none" },
            };
    
          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: getValueAt.bind(undefined, 1),
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" }]);
    
          var chart = new google.visualization.ColumnChart(document.getElementById('divfactor'));
          chart.draw(view, options);
        };
    
        function getValueAt(column, dataTable, row) {
            return dataTable.getFormattedValue(row, column);
          }
    
          function drawDimension() {
            var data = new google.visualization.arrayToDataTable([
    
              ['Dimension', 'Avance'],
                        ['1. Gestión Estrátegica', 92.15],
                        ['2. Formación Integral', 75.63],
                        ['3. Soporte Institucional', 53.93],
                        ['4. Resultados', 50.81],
                        ['Porcentaje Total',100],
                         
              
            ]);
    
            var options = {
              chart: {
                title: 'Dimensión',
                subtitle: 'Avance total por dimension.'
              },
              bar:{ groupWidth:'95%'},
              vAxis: {
                minValue: 0,
                maxValue: 100,
                format: '#\'%\''
              },
              columns:[0,1,2]
    
            };
    
          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: getValueAt.bind(undefined, 1),
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" }]);
    
          var chart = new google.visualization.ColumnChart(document.getElementById('divDimension'));
          chart.draw(view, options);
        };
    
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/46.2/loader.js">
    </script>
    <link id="load-css-0" rel="stylesheet" type="text/css"
        href="https://www.gstatic.com/charts/46.2/css/core/tooltip.css">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/46.2/css/util/util.css">
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_format_module.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_default_module.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_ui_module.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_corechart_module.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_fw_module.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/third_party/dygraphs/dygraph-tickers-combined.js">
    </script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/third_party/webfontloader/webfont.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_bar_module.js"></script>
</head>



</html>
@endsection