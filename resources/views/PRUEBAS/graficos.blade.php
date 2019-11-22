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

<body>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            1. PROPÓSITOS ARTICULADOS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            3. REVISIÓN PERIÓDICA Y PARTICIPATIVA DE LAS POLÍTICAS Y OBJETIVOS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            5. PERTINENCIA DEL PERFIL DE EGRESO</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            7. SISTEMA DE GESTIÓN DE LA CALIDAD (SGC)</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            9. PLAN DE ESTUDIOS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            11. ENFOQUE POR COMPETENCIAS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            15. PLANA DOCENTE ADECUADA</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            17. PLAN DE DESARROLLO ACADÉMICO</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            19. NIVELACIÓN DE INGRESANTES</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            21. ACTIVIDADES EXTRACURRICULARES</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            23. I+D+I PARA LA OBTENCIÓN DEL GRADO Y EL TÍTULO</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            25. RESPONSABILIDAD SOCIAL</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            29. MANTENIMIENTO DE LA INFRAESTRUCTURA</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            31. CENTRO DE INFORMACIÓN Y REFERENCIA</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            33. LOGRO DE COMPENTENCIAS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            1. Planificación del Programa de Estudios</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            2. Gestión del Perfil de egreso</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            3. Aseguramiento de la Calidad</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            4. Proceso de Enseñanza - Aprendizaje</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            5. Gestión de los Docentes</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            6. Seguimiento a Estudiantes</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            7. Investigación, Desarrollo Tecnológico e Innovación</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            8. Responsabilidad Social Universitaria</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            9. Servicios de Bienestar</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            10. Infraestructura y Soporte</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            11. Recursos Humanos</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">
            12. Verificación del Perfil de Egreso</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 15px; margin: 15px; font-family: Arial;">
            CIENCIAS CONTABLES Y FINANCIERAS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 15px; margin: 15px; font-family: Arial;">
            DERECHO Y CIENCIAS POLÍTICAS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 15px; margin: 15px; font-family: Arial;">
            CIENCIAS HISTÓRICO SOCIALES Y GEOGRÁFICAS</div>
    </div>
    <div style="position: absolute; display: none;">
        <div
            style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 15px; margin: 15px; font-family: Arial;">
            FILOSOFIA, PSICOLOGIA Y CIENCIAS</div>
    </div>
    <div class="row">
        <div class="col s12 m12 112">

            <div class="card-panel">
                <h3 class="header2">AVANCE GLOBAL</h3>
                <div class="row">

                    <div id="piechart" style="width: 100%; height: 500px;">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 1030px; height: 500px;">
                                <div aria-label="A chart."
                                    style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                    <svg width="1030" height="500" aria-label="A chart." style="overflow: hidden;">
                                        <defs id="_ABSTRACT_RENDERER_ID_8"></defs>
                                        <rect x="0" y="0" width="1030" height="500" stroke="none" stroke-width="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="169" y="69.75" font-family="Arial"
                                                font-size="15" font-weight="bold" stroke="none" stroke-width="0"
                                                fill="#000000">GRÁFICA
                                                GLOBAL DE LA UNHEVAL</text>
                                            <rect x="169" y="57" width="693" height="15" stroke="none" stroke-width="0"
                                                fill-opacity="0" fill="#ffffff"></rect>
                                        </g>
                                        <g>
                                            <rect x="621" y="96" width="241" height="39" stroke="none" stroke-width="0"
                                                fill-opacity="0" fill="#ffffff"></rect>
                                            <g column-id="Finalizado">
                                                <rect x="621" y="96" width="241" height="15" stroke="none"
                                                    stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                <g><text text-anchor="start" x="642" y="108.75" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#222222">Finalizado</text></g>
                                                <circle cx="628.5" cy="103.5" r="7.5" stroke="none" stroke-width="0"
                                                    fill="#3366cc"></circle>
                                            </g>
                                            <g column-id="Sin Avance">
                                                <rect x="621" y="120" width="241" height="15" stroke="none"
                                                    stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                <g><text text-anchor="start" x="642" y="132.75" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0" fill="#222222">Sin
                                                        Avance</text></g>
                                                <circle cx="628.5" cy="127.5" r="7.5" stroke="none" stroke-width="0"
                                                    fill="#dc3912"></circle>
                                            </g>
                                        </g>
                                        <g>
                                            <path
                                                d="M383,251L277.0125112708991,139.2742096340388A154,154,0,0,1,383,97L383,251A0,0,0,0,0,383,251"
                                                stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                            <text text-anchor="start" x="315.9307664598539" y="142.00141515262965"
                                                font-family="Arial" font-size="15" stroke="none" stroke-width="0"
                                                fill="#ffffff">12.1%</text>
                                        </g>
                                        <g>
                                            <path
                                                d="M383,251L383,97A154,154,0,1,1,277.0125112708991,139.2742096340388L383,251A0,0,0,1,0,383,251"
                                                stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
                                            <text text-anchor="start" x="407.0692335401461" y="370.49858484737035"
                                                font-family="Arial" font-size="15" stroke="none" stroke-width="0"
                                                fill="#ffffff">87.9%</text>
                                        </g>
                                        <g></g>
                                    </svg>
                                    <div aria-label="A tabular representation of the data in the chart."
                                        style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Descripcion</th>
                                                    <th>% de Avance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Finalizado</td>
                                                    <td>87.919</td>
                                                </tr>
                                                <tr>
                                                    <td>Sin Avance</td>
                                                    <td>12.081</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true"
                                style="display: none; position: absolute; top: 510px; left: 1040px; white-space: nowrap; font-family: Arial; font-size: 15px;">
                                Sin Avance</div>
                            <div></div>
                        </div>
                    </div>

                    <h4 class="header2">RANKING</h4>

                    <div id="carreras" style="width: 100%; min-height: 400px;">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 1030px; height: 600px;">
                                <div aria-label="A chart."
                                    style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                    <svg width="1030" height="600" aria-label="A chart." style="overflow: hidden;">
                                        <defs id="_ABSTRACT_RENDERER_ID_6">
                                            <clipPath id="_ABSTRACT_RENDERER_ID_7">
                                                <rect x="189" y="100" width="652" height="300"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect x="0" y="0" width="1030" height="600" stroke="none" stroke-width="0"
                                            fill="#ffffff"></rect>
                                        <g><text text-anchor="start" x="189" y="73.75" font-family="Arial"
                                                font-size="15" font-weight="bold" stroke="none" stroke-width="0"
                                                fill="#000000">% de
                                                Avance por Carreras Profesionales</text>
                                            <rect x="189" y="61" width="652" height="15" stroke="none" stroke-width="0"
                                                fill-opacity="0" fill="#ffffff"></rect>
                                        </g>
                                        <g>
                                            <rect x="856" y="100" width="159" height="15" stroke="none" stroke-width="0"
                                                fill-opacity="0" fill="#ffffff"></rect>
                                            <g>
                                                <rect x="856" y="100" width="159" height="15" stroke="none"
                                                    stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                <g><text text-anchor="start" x="892" y="112.75" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#222222">Avance</text>
                                                </g>
                                                <rect x="856" y="100" width="30" height="15" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                            </g>
                                        </g>
                                        <g>
                                            <rect x="189" y="100" width="652" height="300" stroke="none"
                                                stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                            <g
                                                clip-path="url(https://www.unheval.edu.pe/oca/sineace/reportes/viewcarrerasiframe#_ABSTRACT_RENDERER_ID_7)">
                                                <g>
                                                    <rect x="189" y="399" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="356" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="314" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="271" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="228" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="185" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="143" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="100" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#cccccc">
                                                    </rect>
                                                    <rect x="189" y="378" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                    <rect x="189" y="335" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                    <rect x="189" y="292" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                    <rect x="189" y="250" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                    <rect x="189" y="207" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                    <rect x="189" y="164" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                    <rect x="189" y="121" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#ebebeb">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="194" y="169" width="14" height="230" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="216" y="226" width="14" height="173" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="239" y="189" width="14" height="210" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="261" y="195" width="14" height="204" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="284" y="122" width="13" height="277" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="306" y="207" width="14" height="192" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="328" y="224" width="14" height="175" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="351" y="168" width="14" height="231" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="373" y="195" width="14" height="204" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="396" y="258" width="14" height="141" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="418" y="264" width="14" height="135" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="441" y="279" width="14" height="120" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="463" y="268" width="14" height="131" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="486" y="262" width="13" height="137" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="508" y="270" width="14" height="129" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="531" y="283" width="13" height="116" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="553" y="262" width="14" height="137" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="575" y="164" width="14" height="235" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="598" y="225" width="14" height="174" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="620" y="204" width="14" height="195" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="643" y="171" width="14" height="228" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="665" y="149" width="14" height="250" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="688" y="232" width="14" height="167" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="710" y="202" width="14" height="197" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="733" y="212" width="13" height="187" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="755" y="190" width="14" height="209" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="777" y="140" width="14" height="259" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="800" y="399" width="14" height="0.5" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                    <rect x="822" y="186" width="14" height="213" stroke="none"
                                                        stroke-width="0" fill="#3366cc">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="189" y="399" width="652" height="1" stroke="none"
                                                        stroke-width="0" fill="#333333">
                                                    </rect>
                                                </g>
                                                <g>
                                                    <rect x="201" y="157" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="223" y="214" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="246" y="177" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="268" y="183" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="290" y="122" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="313" y="195" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="335" y="212" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="358" y="156" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="380" y="183" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="403" y="246" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="425" y="252" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="448" y="267" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="470" y="256" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="492" y="250" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="515" y="258" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="537" y="271" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="560" y="250" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="582" y="152" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="605" y="213" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="627" y="192" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="650" y="159" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="672" y="137" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="695" y="220" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="717" y="190" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="739" y="200" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="762" y="178" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="784" y="128" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="807" y="387" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                    <rect x="829" y="174" width="1" height="12" stroke="none"
                                                        stroke-width="0" fill="#999999">
                                                    </rect>
                                                </g>
                                            </g>
                                            <g></g>
                                            <g>
                                                <g><text text-anchor="end" x="204.43644853226385" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 204.43644853226385 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">CIENCIAS
                                                        ADMINISTRATIVAS</text></g>
                                                <g><text text-anchor="end" x="249.3330002564018" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 249.3330002564018 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">INGENIERÍA
                                                        AGRONÓMICA</text></g>
                                                <g><text text-anchor="end" x="294.2295519805397" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 294.2295519805397 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">CIENCIAS CONTABLES
                                                        Y FINA…</text>
                                                    <path
                                                        d="M116.9225265980129,572.4881130634992L285.21394052041126,404.19669914110085L295.8205422382095,414.8033008588991L127.52912831581114,583.0947147812974Z"
                                                        stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                    </path>
                                                </g>
                                                <g><text text-anchor="end" x="339.12610370467763" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 339.12610370467763 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">COMUNICACIÓN
                                                        SOCIAL</text></g>
                                                <g><text text-anchor="end" x="384.02265542881554" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 384.02265542881554 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">DERECHO Y CIENCIAS
                                                        POLÍTI…</text>
                                                    <path
                                                        d="M206.71563004628874,572.4881130634992L375.00704396868707,404.19669914110085L385.61364568648526,414.80330085889904L217.32223176408692,583.0947147812974Z"
                                                        stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                    </path>
                                                </g>
                                                <g><text text-anchor="end" x="428.9192071529535" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 428.9192071529535 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">CIENCIAS HISTÓRICO
                                                        SOCIAL…</text>
                                                    <path
                                                        d="M251.6121817704267,572.4881130634992L419.90359569282504,404.1966991411009L430.5101974106232,414.8033008588991L262.21878348822486,583.0947147812974Z"
                                                        stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                    </path>
                                                </g>
                                                <g><text text-anchor="end" x="473.8157588770914" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 473.8157588770914 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">EDUCACION
                                                        FISICA</text></g>
                                                <g><text text-anchor="end" x="518.7123106012293" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 518.7123106012293 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">FILOSOFIA,
                                                        PSICOLOGIA Y CIE…</text>
                                                    <path
                                                        d="M341.4052852187026,572.4881130634991L509.6966991411009,404.19669914110085L520.3033008588991,414.8033008588991L352.0118869365008,583.0947147812974Z"
                                                        stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                    </path>
                                                </g>
                                                <g><text text-anchor="end" x="563.6088623253672" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 563.6088623253672 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">MATEMATICA Y
                                                        FISICA</text></g>
                                                <g><text text-anchor="end" x="608.5054140495051" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 608.5054140495051 413.2123106012294)"
                                                        stroke="none" stroke-width="0"
                                                        fill="#222222">ARQUITECTURA</text></g>
                                                <g><text text-anchor="end" x="653.401965773643" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 653.401965773643 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">INGENIERIA DE
                                                        SISTEMAS</text></g>
                                                <g><text text-anchor="end" x="698.298517497781" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 698.298517497781 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">MEDICINA
                                                        HUMANA</text></g>
                                                <g><text text-anchor="end" x="743.195069221919" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 743.195069221919 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">MEDICINA
                                                        VETERINARIA</text></g>
                                                <g><text text-anchor="end" x="788.0916209460569" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 788.0916209460569 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">PSICOLOGIA</text>
                                                </g>
                                                <g><text text-anchor="end" x="832.9881726701948" y="413.2123106012294"
                                                        font-family="Arial" font-size="15"
                                                        transform="rotate(-45 832.9881726701948 413.2123106012294)"
                                                        stroke="none" stroke-width="0" fill="#222222">Porcentaje
                                                        Total</text></g>
                                                <g><text text-anchor="end" x="174" y="404.75" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">0</text></g>
                                                <g><text text-anchor="end" x="174" y="362.0357" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">20</text></g>
                                                <g><text text-anchor="end" x="174" y="319.3214" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">40</text></g>
                                                <g><text text-anchor="end" x="174" y="276.6071" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">60</text></g>
                                                <g><text text-anchor="end" x="174" y="233.8929" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">80</text></g>
                                                <g><text text-anchor="end" x="174" y="191.1786" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">100</text></g>
                                                <g><text text-anchor="end" x="174" y="148.4643" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">120</text></g>
                                                <g><text text-anchor="end" x="174" y="105.75" font-family="Arial"
                                                        font-size="15" stroke="none" stroke-width="0"
                                                        fill="#444444">140</text></g>
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <rect x="175.5" y="141.5" width="52" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="201" y="154.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">108.32</text><text
                                                                text-anchor="middle" x="201" y="154.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">108.32</text></g>
                                                        <rect x="178" y="142" width="46" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="201.5" y="198.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="223" y="211.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">81.44</text><text
                                                                text-anchor="middle" x="223" y="211.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">81.44</text></g>
                                                        <rect x="204" y="199" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="224.5" y="161.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="246" y="174.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">98.85</text><text
                                                                text-anchor="middle" x="246" y="174.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">98.85</text></g>
                                                        <rect x="227" y="162" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="246.5" y="167.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="268" y="180.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">96.03</text><text
                                                                text-anchor="middle" x="268" y="180.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">96.03</text></g>
                                                        <rect x="249" y="168" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="264.5" y="133.5" width="52" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="290" y="146.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">130.35</text><text
                                                                text-anchor="middle" x="290" y="146.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">130.35</text></g>
                                                        <rect x="267" y="134" width="46" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="291.5" y="179.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="313" y="192.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">90.41</text><text
                                                                text-anchor="middle" x="313" y="192.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">90.41</text></g>
                                                        <rect x="294" y="180" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="313.5" y="196.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="335" y="209.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">82.29</text><text
                                                                text-anchor="middle" x="335" y="209.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">82.29</text></g>
                                                        <rect x="316" y="197" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="332.5" y="140.5" width="52" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="358" y="153.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">108.41</text><text
                                                                text-anchor="middle" x="358" y="153.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">108.41</text></g>
                                                        <rect x="335" y="141" width="46" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="358.5" y="167.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="380" y="180.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">96.18</text><text
                                                                text-anchor="middle" x="380" y="180.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">96.18</text></g>
                                                        <rect x="361" y="168" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="381.5" y="230.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="403" y="243.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">66.59</text><text
                                                                text-anchor="middle" x="403" y="243.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">66.59</text></g>
                                                        <rect x="384" y="231" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="403.5" y="236.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="425" y="249.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">63.56</text><text
                                                                text-anchor="middle" x="425" y="249.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">63.56</text></g>
                                                        <rect x="406" y="237" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="426.5" y="251.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="448" y="264.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">56.74</text><text
                                                                text-anchor="middle" x="448" y="264.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">56.74</text></g>
                                                        <rect x="429" y="252" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="448.5" y="240.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="470" y="253.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">61.62</text><text
                                                                text-anchor="middle" x="470" y="253.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">61.62</text></g>
                                                        <rect x="451" y="241" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="470.5" y="234.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="492" y="247.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">64.41</text><text
                                                                text-anchor="middle" x="492" y="247.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">64.41</text></g>
                                                        <rect x="473" y="235" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="493.5" y="242.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="515" y="255.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">60.74</text><text
                                                                text-anchor="middle" x="515" y="255.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">60.74</text></g>
                                                        <rect x="496" y="243" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="515.5" y="255.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="537" y="268.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">54.68</text><text
                                                                text-anchor="middle" x="537" y="268.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">54.68</text></g>
                                                        <rect x="518" y="256" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="538.5" y="234.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="560" y="247.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">64.59</text><text
                                                                text-anchor="middle" x="560" y="247.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">64.59</text></g>
                                                        <rect x="541" y="235" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="557.5" y="136.5" width="50" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="582" y="149.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">110.35</text><text
                                                                text-anchor="middle" x="582" y="149.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">110.35</text></g>
                                                        <rect x="559.5" y="137" width="45" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="583.5" y="197.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="605" y="210.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">81.94</text><text
                                                                text-anchor="middle" x="605" y="210.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">81.94</text></g>
                                                        <rect x="586" y="198" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="605.5" y="176.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="627" y="189.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">91.71</text><text
                                                                text-anchor="middle" x="627" y="189.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">91.71</text></g>
                                                        <rect x="608" y="177" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="624.5" y="143.5" width="52" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="650" y="156.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">107.26</text><text
                                                                text-anchor="middle" x="650" y="156.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">107.26</text></g>
                                                        <rect x="627" y="144" width="46" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="647.5" y="121.5" width="50" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="672" y="134.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">117.32</text><text
                                                                text-anchor="middle" x="672" y="134.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">117.32</text></g>
                                                        <rect x="649.5" y="122" width="45" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="673.5" y="204.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="695" y="217.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">78.88</text><text
                                                                text-anchor="middle" x="695" y="217.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">78.88</text></g>
                                                        <rect x="676" y="205" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="695.5" y="174.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="717" y="187.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">92.53</text><text
                                                                text-anchor="middle" x="717" y="187.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">92.53</text></g>
                                                        <rect x="698" y="175" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="717.5" y="184.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="739" y="197.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">88.26</text><text
                                                                text-anchor="middle" x="739" y="197.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">88.26</text></g>
                                                        <rect x="720" y="185" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="740.5" y="162.5" width="44" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="762" y="175.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">98.47</text><text
                                                                text-anchor="middle" x="762" y="175.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">98.47</text></g>
                                                        <rect x="743" y="163" width="38" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="758.5" y="112.5" width="52" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="784" y="125.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">121.88</text><text
                                                                text-anchor="middle" x="784" y="125.75"
                                                                font-family="Arial" font-size="15" stroke="none"
                                                                stroke-width="0" fill="#3366cc">121.88</text></g>
                                                        <rect x="761" y="113" width="46" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="800.5" y="371.5" width="14" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="807" y="384.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">0</text><text text-anchor="middle"
                                                                x="807" y="384.75" font-family="Arial" font-size="15"
                                                                stroke="none" stroke-width="0" fill="#3366cc">0</text>
                                                        </g>
                                                        <rect x="803" y="372" width="8" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="814.5" y="158.5" width="30" height="17" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                        <g><text text-anchor="middle" x="829" y="171.75"
                                                                font-family="Arial" font-size="15" stroke="#ffffff"
                                                                stroke-width="3" fill="#3366cc"
                                                                aria-hidden="true">100</text><text text-anchor="middle"
                                                                x="829" y="171.75" font-family="Arial" font-size="15"
                                                                stroke="none" stroke-width="0" fill="#3366cc">100</text>
                                                        </g>
                                                        <rect x="816.5" y="159" width="25" height="15" stroke="none"
                                                            stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g><text text-anchor="middle" x="515" y="595.75" font-family="Arial"
                                                    font-size="15" font-style="italic" stroke="none" stroke-width="0"
                                                    fill="#ff0000">Carreras Profesionales</text>
                                                <rect x="189" y="583" width="652" height="15" stroke="none"
                                                    stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                            </g>
                                            <g><text text-anchor="middle" x="79.75" y="250" font-family="Arial"
                                                    font-size="15" font-style="italic" transform="rotate(-90 79.75 250)"
                                                    stroke="none" stroke-width="0" fill="#222222">Porcentaje</text>
                                                <path
                                                    d="M66.99999999999999,400L67.00000000000001,100L82.00000000000001,100L81.99999999999999,400Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                        </g>
                                        <g></g>
                                    </svg>
                                    <div aria-label="A tabular representation of the data in the chart."
                                        style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Carrera</th>
                                                    <th>Avance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> CIENCIAS ADMINISTRATIVAS</td>
                                                    <td>108.32</td>
                                                </tr>
                                                <tr>
                                                    <td>TURISMO Y HOTELERIA</td>
                                                    <td>81.44</td>
                                                </tr>
                                                <tr>
                                                    <td>INGENIERÍA AGRONÓMICA</td>
                                                    <td>98.85</td>
                                                </tr>
                                                <tr>
                                                    <td>INGENIERIA AGROINDUSTRIAL</td>
                                                    <td>96.03</td>
                                                </tr>
                                                <tr>
                                                    <td>CIENCIAS CONTABLES Y FINANCIERAS</td>
                                                    <td>130.35</td>
                                                </tr>
                                                <tr>
                                                    <td>ECONOMÍA</td>
                                                    <td>90.41</td>
                                                </tr>
                                                <tr>
                                                    <td>COMUNICACIÓN SOCIAL</td>
                                                    <td>82.29</td>
                                                </tr>
                                                <tr>
                                                    <td>SOCIOLOGIA</td>
                                                    <td>108.41</td>
                                                </tr>
                                                <tr>
                                                    <td>DERECHO Y CIENCIAS POLÍTICAS</td>
                                                    <td>96.18</td>
                                                </tr>
                                                <tr>
                                                    <td>BIOLOGIA, QUIMICA Y CIENCIAS DEL AMBIENTE</td>
                                                    <td>66.59</td>
                                                </tr>
                                                <tr>
                                                    <td>CIENCIAS HISTÓRICO SOCIALES Y GEOGRÁFICAS</td>
                                                    <td>63.56</td>
                                                </tr>
                                                <tr>
                                                    <td>EDUCACION INICIAL</td>
                                                    <td>56.74</td>
                                                </tr>
                                                <tr>
                                                    <td>EDUCACION FISICA</td>
                                                    <td>61.62</td>
                                                </tr>
                                                <tr>
                                                    <td>EDUCACIÓN PRIMARIA</td>
                                                    <td>64.41</td>
                                                </tr>
                                                <tr>
                                                    <td>FILOSOFIA, PSICOLOGIA Y CIENCIAS</td>
                                                    <td>60.74</td>
                                                </tr>
                                                <tr>
                                                    <td>LENGUA Y LITERATURA</td>
                                                    <td>54.68</td>
                                                </tr>
                                                <tr>
                                                    <td>MATEMATICA Y FISICA</td>
                                                    <td>64.59</td>
                                                </tr>
                                                <tr>
                                                    <td>ENFERMERIA</td>
                                                    <td>110.35</td>
                                                </tr>
                                                <tr>
                                                    <td>ARQUITECTURA</td>
                                                    <td>81.94</td>
                                                </tr>
                                                <tr>
                                                    <td>INGENIERIA CIVIL</td>
                                                    <td>91.71</td>
                                                </tr>
                                                <tr>
                                                    <td>INGENIERIA DE SISTEMAS</td>
                                                    <td>107.26</td>
                                                </tr>
                                                <tr>
                                                    <td>INGENIERIA INDUSTRIAL</td>
                                                    <td>117.32</td>
                                                </tr>
                                                <tr>
                                                    <td>MEDICINA HUMANA</td>
                                                    <td>78.88</td>
                                                </tr>
                                                <tr>
                                                    <td>ODONTOLOGIA</td>
                                                    <td>92.53</td>
                                                </tr>
                                                <tr>
                                                    <td>MEDICINA VETERINARIA</td>
                                                    <td>88.26</td>
                                                </tr>
                                                <tr>
                                                    <td>OBSTETRICIA</td>
                                                    <td>98.47</td>
                                                </tr>
                                                <tr>
                                                    <td>PSICOLOGIA</td>
                                                    <td>121.88</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Porcentaje Total</td>
                                                    <td>100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true"
                                style="display: none; position: absolute; top: 610px; left: 1040px; white-space: nowrap; font-family: Arial; font-size: 15px;">
                                Avance</div>
                            <div></div>
                        </div>
                    </div>

                    <!--<table class="ui celled striped table">
          <thead>
            <tr>
              <th>Número</th>
              <th>CARRERA</th>
              <th>AVANCE</th>
            </tr>
            </thead>
          <tbody>
                    <tr>
              <td>E1</td>
              <td> ESCUELA PROFESIONAL DE CIENCIAS ADMINISTRATIVAS</td>
              <td>108.32352941176%</td>
            </tr>
                    <tr>
              <td>E2</td>
              <td>ESCUELA PROFESIONAL DE TURISMO Y HOTELERIA</td>
              <td>81.441176470588%</td>
            </tr>
                    <tr>
              <td>E3</td>
              <td>ESCUELA PROFESIONAL DE INGENIERÍA  AGRONÓMICA</td>
              <td>98.852941176471%</td>
            </tr>
                    <tr>
              <td>E4</td>
              <td>ESCUELA PROFESIONAL DE INGENIERIA AGROINDUSTRIAL</td>
              <td>96.029411764706%</td>
            </tr>
                    <tr>
              <td>E5</td>
              <td>ESCUELA PROFESIONAL DE CIENCIAS CONTABLES Y FINANCIERAS</td>
              <td>130.35294117647%</td>
            </tr>
                    <tr>
              <td>E6</td>
              <td>ESCUELA PROFESIONAL DE ECONOMÍA</td>
              <td>90.411764705882%</td>
            </tr>
                    <tr>
              <td>E7</td>
              <td>ESCUELA PROFESIONAL DE COMUNICACIÓN SOCIAL</td>
              <td>82.294117647059%</td>
            </tr>
                    <tr>
              <td>E8</td>
              <td>ESCUELA PROFESIONAL DE SOCIOLOGIA</td>
              <td>108.41176470588%</td>
            </tr>
                    <tr>
              <td>E9</td>
              <td>ESCUELA PROFESIONAL DE DERECHO Y CIENCIAS POLÍTICAS</td>
              <td>96.176470588235%</td>
            </tr>
                    <tr>
              <td>E10</td>
              <td>ESCUELA PROFESIONAL DE BIOLOGIA, QUIMICA Y CIENCIAS DEL AMBIENTE</td>
              <td>66.588235294118%</td>
            </tr>
                    <tr>
              <td>E11</td>
              <td>ESCUELA PROFESIONAL DE CIENCIAS HISTÓRICO SOCIALES Y GEOGRÁFICAS</td>
              <td>63.558823529412%</td>
            </tr>
                    <tr>
              <td>E12</td>
              <td>ESCUELA PROFESIONAL DE EDUCACION INICIAL</td>
              <td>56.735294117647%</td>
            </tr>
                    <tr>
              <td>E13</td>
              <td>ESCUELA PROFESIONAL DE EDUCACION FISICA</td>
              <td>61.617647058824%</td>
            </tr>
                    <tr>
              <td>E14</td>
              <td>ESCUELA PROFESIONAL DE EDUCACIÓN PRIMARIA</td>
              <td>64.411764705882%</td>
            </tr>
                    <tr>
              <td>E15</td>
              <td>ESCUELA PROFESIONAL DE FILOSOFIA, PSICOLOGIA Y CIENCIAS</td>
              <td>60.735294117647%</td>
            </tr>
                    <tr>
              <td>E16</td>
              <td>ESCUELA PROFESIONAL DE LENGUA Y LITERATURA</td>
              <td>54.676470588235%</td>
            </tr>
                    <tr>
              <td>E17</td>
              <td>ESCUELA PROFESIONAL DE MATEMATICA Y FISICA</td>
              <td>64.588235294118%</td>
            </tr>
                    <tr>
              <td>E18</td>
              <td>ESCUELA PROFESIONAL DE ENFERMERIA</td>
              <td>110.35294117647%</td>
            </tr>
                    <tr>
              <td>E19</td>
              <td>ESCUELA PROFESIONAL DE ARQUITECTURA</td>
              <td>81.941176470588%</td>
            </tr>
                    <tr>
              <td>E20</td>
              <td>ESCUELA PROFESIONAL DE INGENIERIA CIVIL</td>
              <td>91.705882352941%</td>
            </tr>
                    <tr>
              <td>E21</td>
              <td>ESCUELA PROFESIONAL DE INGENIERIA DE SISTEMAS</td>
              <td>107.26470588235%</td>
            </tr>
                    <tr>
              <td>E22</td>
              <td>ESCUELA PROFESIONAL DE INGENIERIA INDUSTRIAL</td>
              <td>117.32352941176%</td>
            </tr>
                    <tr>
              <td>E23</td>
              <td>ESCUELA PROFESIONAL DE MEDICINA HUMANA</td>
              <td>78.882352941176%</td>
            </tr>
                    <tr>
              <td>E24</td>
              <td>ESCUELA PROFESIONAL DE ODONTOLOGIA</td>
              <td>92.529411764706%</td>
            </tr>
                    <tr>
              <td>E25</td>
              <td>ESCUELA PROFESIONAL DE MEDICINA VETERINARIA</td>
              <td>88.264705882353%</td>
            </tr>
                    <tr>
              <td>E26</td>
              <td>ESCUELA PROFESIONAL DE OBSTETRICIA</td>
              <td>98.470588235294%</td>
            </tr>
                    <tr>
              <td>E27</td>
              <td>ESCUELA PROFESIONAL DE PSICOLOGIA</td>
              <td>121.88235294118%</td>
            </tr>
                    <tr>
              <td>E46</td>
              <td>ESCUELA DE POSGRADO</td>
              <td>0%</td>
            </tr>
                  </tbody>
        </table>
    
      </div>
      </div>
    </div>-->

                </div>
                <div id="divDimension" style="width: 100%; min-height: 400px;">
                    <div style="position: relative;">
                        <div dir="ltr" style="position: relative; width: 1030px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                <svg width="1030" height="400" aria-label="A chart." style="overflow: hidden;">
                                    <defs id="_ABSTRACT_RENDERER_ID_4">
                                        <clipPath id="_ABSTRACT_RENDERER_ID_5">
                                            <rect x="148" y="77" width="734" height="247"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect x="0" y="0" width="1030" height="400" stroke="none" stroke-width="0"
                                        fill="#ffffff"></rect>
                                    <g>
                                        <rect x="896" y="77" width="120" height="14" stroke="none" stroke-width="0"
                                            fill-opacity="0" fill="#ffffff"></rect>
                                        <g>
                                            <rect x="896" y="77" width="120" height="14" stroke="none" stroke-width="0"
                                                fill-opacity="0" fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="929" y="88.9" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#222222">Avance</text></g>
                                            <rect x="896" y="77" width="28" height="14" stroke="none" stroke-width="0"
                                                fill="#3366cc"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <rect x="148" y="77" width="734" height="247" stroke="none" stroke-width="0"
                                            fill-opacity="0" fill="#ffffff"></rect>
                                        <g
                                            clip-path="url(https://www.unheval.edu.pe/oca/sineace/reportes/viewcarrerasiframe#_ABSTRACT_RENDERER_ID_5)">
                                            <g>
                                                <rect x="148" y="323" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="274" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="225" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="175" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="126" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="77" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="298" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#ebebeb">
                                                </rect>
                                                <rect x="148" y="249" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#ebebeb">
                                                </rect>
                                                <rect x="148" y="200" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#ebebeb">
                                                </rect>
                                                <rect x="148" y="151" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#ebebeb">
                                                </rect>
                                                <rect x="148" y="102" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#ebebeb">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="152" y="97" width="139" height="226" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="299" y="138" width="139" height="185" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="445" y="191" width="140" height="132" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="592" y="199" width="139" height="124" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="739" y="78" width="139" height="245" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="148" y="323" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#333333">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="221" y="97" width="1" height="0" stroke="none" stroke-width="0"
                                                    fill="#999999"></rect>
                                                <rect x="368" y="138" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="515" y="191" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="661" y="199" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="808" y="78" width="1" height="0" stroke="none" stroke-width="0"
                                                    fill="#999999"></rect>
                                            </g>
                                        </g>
                                        <g></g>
                                        <g>
                                            <g><text text-anchor="middle" x="221.8" y="344.9" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0" fill="#222222">1.
                                                    Gestión</text><text text-anchor="middle" x="221.8" y="362.9"
                                                    font-family="Arial" font-size="14" stroke="none" stroke-width="0"
                                                    fill="#222222">Estrátegica</text></g>
                                            <g><text text-anchor="middle" x="368.4" y="344.9" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0" fill="#222222">2.
                                                    Formación Integral</text></g>
                                            <g><text text-anchor="middle" x="515" y="344.9" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0" fill="#222222">3.
                                                    Soporte</text><text text-anchor="middle" x="515" y="362.9"
                                                    font-family="Arial" font-size="14" stroke="none" stroke-width="0"
                                                    fill="#222222">Institucional</text></g>
                                            <g><text text-anchor="middle" x="661.6" y="344.9" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0" fill="#222222">4.
                                                    Resultados</text></g>
                                            <g><text text-anchor="middle" x="808.1999999999999" y="344.9"
                                                    font-family="Arial" font-size="14" stroke="none" stroke-width="0"
                                                    fill="#222222">Porcentaje Total</text></g>
                                            <g><text text-anchor="end" x="134" y="328.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">0%</text></g>
                                            <g><text text-anchor="end" x="134" y="279.2" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">20%</text></g>
                                            <g><text text-anchor="end" x="134" y="230" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">40%</text></g>
                                            <g><text text-anchor="end" x="134" y="180.8" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">60%</text></g>
                                            <g><text text-anchor="end" x="134" y="131.6" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">80%</text></g>
                                            <g><text text-anchor="end" x="134" y="82.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">100%</text></g>
                                        </g>
                                        <g>
                                            <g>
                                                <g><text text-anchor="middle" x="221" y="110.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">92.15</text>
                                                    <rect x="203.5" y="99" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="368" y="151.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">75.63</text>
                                                    <rect x="350.5" y="140" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="515" y="204.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">53.93</text>
                                                    <rect x="497.5" y="193" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="661" y="212.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">50.81</text>
                                                    <rect x="643.5" y="201" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="808" y="91.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">100</text>
                                                    <rect x="796.5" y="80" width="23" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                    style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Dimension</th>
                                                <th>Avance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. Gestión Estrátegica</td>
                                                <td>92.15</td>
                                            </tr>
                                            <tr>
                                                <td>2. Formación Integral</td>
                                                <td>75.63</td>
                                            </tr>
                                            <tr>
                                                <td>3. Soporte Institucional</td>
                                                <td>53.93</td>
                                            </tr>
                                            <tr>
                                                <td>4. Resultados</td>
                                                <td>50.81</td>
                                            </tr>
                                            <tr>
                                                <td>Porcentaje Total</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 1040px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                            Avance</div>
                        <div></div>
                    </div>
                </div>
                <div id="divfactor" style="width: 100%; min-height: 400px;">
                    <div style="position: relative;">
                        <div dir="ltr" style="position: relative; width: 1030px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                <svg width="1030" height="400" aria-label="A chart." style="overflow: hidden;">
                                    <defs id="_ABSTRACT_RENDERER_ID_2">
                                        <clipPath id="_ABSTRACT_RENDERER_ID_3">
                                            <rect x="148" y="77" width="734" height="247"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect x="0" y="0" width="1030" height="400" stroke="none" stroke-width="0"
                                        fill="#ffffff"></rect>
                                    <g>
                                        <rect x="148" y="77" width="734" height="247" stroke="none" stroke-width="0"
                                            fill-opacity="0" fill="#ffffff"></rect>
                                        <g
                                            clip-path="url(https://www.unheval.edu.pe/oca/sineace/reportes/viewcarrerasiframe#_ABSTRACT_RENDERER_ID_3)">
                                            <g>
                                                <rect x="148" y="323" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="282" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="241" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="200" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="159" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="118" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="77" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="150" y="162" width="53" height="161" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="206" y="230" width="54" height="93" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="263" y="114" width="53" height="209" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="319" y="178" width="54" height="145" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="375" y="201" width="54" height="122" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="432" y="191" width="53" height="132" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="488" y="161" width="54" height="162" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="545" y="172" width="53" height="151" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="601" y="193" width="54" height="130" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="657" y="201" width="54" height="122" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="714" y="274" width="53" height="49" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="770" y="241" width="54" height="82" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="827" y="160" width="53" height="163" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="148" y="323" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#333333">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="176" y="162" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="233" y="230" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="289" y="114" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="346" y="178" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="402" y="201" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="458" y="191" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="515" y="161" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="571" y="172" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="628" y="193" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="684" y="201" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="740" y="274" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="797" y="241" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="853" y="160" width="1" height="0" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                            </g>
                                        </g>
                                        <g></g>
                                        <g>
                                            <g><text text-anchor="end" x="179.14230769230767" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 179.14230769230767 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">1.
                                                    Planificación…</text>
                                                <path
                                                    d="M70.13528464195947,386.4378221735089L173.19230769230768,326.9378221735089L180.19230769230768,339.06217782649105L77.13528464195947,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="235.52692307692308" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 235.52692307692308 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">2.
                                                    Gestión del
                                                    P…</text>
                                                <path
                                                    d="M126.5199000265749,386.4378221735089L229.5769230769231,326.93782217350895L236.5769230769231,339.0621778264911L133.5199000265749,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="291.91153846153844" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 291.91153846153844 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">3.
                                                    Aseguramient…</text>
                                                <path
                                                    d="M182.9045154111903,386.43782217350895L285.96153846153845,326.93782217350895L292.96153846153845,339.06217782649105L189.9045154111903,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="348.29615384615386" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 348.29615384615386 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">4.
                                                    Proceso de
                                                    E…</text>
                                                <path
                                                    d="M239.28913079580568,386.4378221735089L342.34615384615387,326.93782217350895L349.34615384615387,339.06217782649105L246.28913079580568,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="404.6807692307692" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 404.6807692307692 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">5.
                                                    Gestión de
                                                    los…</text>
                                                <path
                                                    d="M295.67374618042106,386.4378221735089L398.7307692307693,326.9378221735089L405.7307692307693,339.06217782649105L302.67374618042106,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="461.06538461538463" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 461.06538461538463 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">6.
                                                    Seguimiento
                                                    a…</text>
                                                <path
                                                    d="M352.0583615650365,386.43782217350895L455.11538461538464,326.93782217350895L462.11538461538464,339.06217782649105L359.0583615650364,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="517.45" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 517.45 337.24352447854375)" stroke="none"
                                                    stroke-width="0" fill="#222222">7.
                                                    Investigación,…</text>
                                                <path
                                                    d="M408.4429769496518,386.4378221735089L511.5,326.93782217350895L518.5,339.06217782649105L415.4429769496518,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="573.8346153846155" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 573.8346153846155 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">8.
                                                    Responsabilid…</text>
                                                <path
                                                    d="M464.82759233426725,386.4378221735089L567.8846153846155,326.93782217350895L574.8846153846155,339.06217782649105L471.82759233426725,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="630.2192307692308" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 630.2192307692308 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">9.
                                                    Servicios de
                                                    B…</text>
                                                <path
                                                    d="M521.2122077188825,386.43782217350883L624.2692307692307,326.93782217350883L631.2692307692307,339.06217782649105L528.2122077188825,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="686.6038461538462" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 686.6038461538462 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">10.
                                                    Infraestructu…</text>
                                                <path
                                                    d="M577.596823103498,386.43782217350895L680.6538461538462,326.93782217350895L687.6538461538462,339.06217782649105L584.596823103498,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="742.9884615384616" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 742.9884615384616 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">11.
                                                    Recursos
                                                    Hu…</text>
                                                <path
                                                    d="M633.9814384881133,386.43782217350895L737.0384615384614,326.93782217350895L744.0384615384614,339.06217782649105L640.9814384881133,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="799.373076923077" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 799.373076923077 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">12.
                                                    Verificación…</text>
                                                <path
                                                    d="M690.3660538727288,386.43782217350883L793.4230769230769,326.9378221735089L800.4230769230769,339.0621778264911L697.3660538727288,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="855.7576923076924" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 855.7576923076924 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">Porcentaje
                                                    Total</text></g>
                                            <g><text text-anchor="end" x="134" y="328.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">0</text></g>
                                            <g><text text-anchor="end" x="134" y="287.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">25</text></g>
                                            <g><text text-anchor="end" x="134" y="246.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">50</text></g>
                                            <g><text text-anchor="end" x="134" y="205.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">75</text></g>
                                            <g><text text-anchor="end" x="134" y="164.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">100</text></g>
                                            <g><text text-anchor="end" x="134" y="123.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">125</text></g>
                                            <g><text text-anchor="end" x="134" y="82.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">150</text></g>
                                        </g>
                                        <g>
                                            <g>
                                                <g><text text-anchor="middle" x="176" y="175.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">98.81</text>
                                                    <rect x="158.5" y="164" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="233" y="243.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">57.19</text>
                                                    <rect x="215.5" y="232" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="289" y="127.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">128</text>
                                                    <rect x="277.5" y="116" width="23" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="346" y="191.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">88.81</text>
                                                    <rect x="328.5" y="180" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="402" y="214.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">74.85</text>
                                                    <rect x="384.5" y="203" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="458" y="204.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">81</text>
                                                    <rect x="450" y="193" width="16" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="515" y="174.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">99.48</text>
                                                    <rect x="497.5" y="163" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="571" y="185.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">92.96</text>
                                                    <rect x="553.5" y="174" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="628" y="206.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">79.81</text>
                                                    <rect x="610.5" y="195" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="684" y="214.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">74.89</text>
                                                    <rect x="666.5" y="203" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="740" y="287.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">30.59</text>
                                                    <rect x="722.5" y="276" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="797" y="254.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">50.81</text>
                                                    <rect x="779.5" y="243" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g><text text-anchor="middle" x="853" y="173.9" font-family="Arial"
                                                        font-size="14" stroke="none" stroke-width="0"
                                                        fill="#ffffff">100</text>
                                                    <rect x="841.5" y="162" width="23" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                    style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Factor</th>
                                                <th>Avance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. Planificación del Programa de Estudios</td>
                                                <td>98.81</td>
                                            </tr>
                                            <tr>
                                                <td>2. Gestión del Perfil de egreso</td>
                                                <td>57.19</td>
                                            </tr>
                                            <tr>
                                                <td>3. Aseguramiento de la Calidad</td>
                                                <td>128</td>
                                            </tr>
                                            <tr>
                                                <td>4. Proceso de Enseñanza - Aprendizaje</td>
                                                <td>88.81</td>
                                            </tr>
                                            <tr>
                                                <td>5. Gestión de los Docentes</td>
                                                <td>74.85</td>
                                            </tr>
                                            <tr>
                                                <td>6. Seguimiento a Estudiantes</td>
                                                <td>81</td>
                                            </tr>
                                            <tr>
                                                <td>7. Investigación, Desarrollo Tecnológico e
                                                    Innovación</td>
                                                <td>99.48</td>
                                            </tr>
                                            <tr>
                                                <td>8. Responsabilidad Social Universitaria</td>
                                                <td>92.96</td>
                                            </tr>
                                            <tr>
                                                <td>9. Servicios de Bienestar</td>
                                                <td>79.81</td>
                                            </tr>
                                            <tr>
                                                <td>10. Infraestructura y Soporte</td>
                                                <td>74.89</td>
                                            </tr>
                                            <tr>
                                                <td>11. Recursos Humanos</td>
                                                <td>30.59</td>
                                            </tr>
                                            <tr>
                                                <td>12. Verificación del Perfil de Egreso</td>
                                                <td>50.81</td>
                                            </tr>
                                            <tr>
                                                <td>Porcentaje Total</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 1040px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                            100</div>
                        <div></div>
                    </div>
                </div>
                <div id="dual_y_div" style="width: 100%; min-height: 400px;">
                    <div style="position: relative;">
                        <div dir="ltr" style="position: relative; width: 1030px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                <svg width="1030" height="400" aria-label="A chart." style="overflow: hidden;">
                                    <defs id="_ABSTRACT_RENDERER_ID_0">
                                        <clipPath id="_ABSTRACT_RENDERER_ID_1">
                                            <rect x="148" y="77" width="734" height="247"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect x="0" y="0" width="1030" height="400" stroke="none" stroke-width="0"
                                        fill="#ffffff"></rect>
                                    <g>
                                        <rect x="896" y="77" width="120" height="14" stroke="none" stroke-width="0"
                                            fill-opacity="0" fill="#ffffff"></rect>
                                        <g>
                                            <rect x="896" y="77" width="120" height="14" stroke="none" stroke-width="0"
                                                fill-opacity="0" fill="#ffffff"></rect>
                                            <g><text text-anchor="start" x="929" y="88.9" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#222222">Avance</text></g>
                                            <rect x="896" y="77" width="28" height="14" stroke="none" stroke-width="0"
                                                fill="#3366cc"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <rect x="148" y="77" width="734" height="247" stroke="none" stroke-width="0"
                                            fill-opacity="0" fill="#ffffff"></rect>
                                        <g
                                            clip-path="url(https://www.unheval.edu.pe/oca/sineace/reportes/viewcarrerasiframe#_ABSTRACT_RENDERER_ID_1)">
                                            <g>
                                                <rect x="148" y="323" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="282" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="241" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="200" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="159" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="118" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                                <rect x="148" y="77" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#cccccc">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="149" y="140" width="20" height="183" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="170" y="161" width="20" height="162" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="191" y="161" width="20" height="162" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="212" y="159" width="20" height="164" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="233" y="214" width="20" height="109" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="254" y="233" width="20" height="90" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="275" y="108" width="20" height="215" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="296" y="122" width="20" height="201" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="317" y="157" width="19" height="166" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="338" y="93" width="19" height="230" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="358" y="232" width="20" height="91" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="379" y="207" width="20" height="116" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="400" y="149" width="20" height="174" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="421" y="188" width="20" height="135" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="442" y="237" width="20" height="86" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="463" y="168" width="20" height="155" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="484" y="191" width="20" height="132" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="505" y="167" width="20" height="156" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="526" y="197" width="20" height="126" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="547" y="207" width="20" height="116" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="568" y="135" width="20" height="188" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="589" y="138" width="20" height="185" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="610" y="92" width="20" height="231" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="631" y="198" width="20" height="125" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="652" y="195" width="20" height="128" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="673" y="134" width="19" height="189" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="694" y="193" width="19" height="130" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="714" y="202" width="20" height="121" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="735" y="194" width="20" height="129" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="756" y="175" width="20" height="148" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="777" y="212" width="20" height="111" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="798" y="274" width="20" height="49" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="819" y="270" width="20" height="53" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="840" y="214" width="20" height="109" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                                <rect x="861" y="160" width="20" height="163" stroke="none"
                                                    stroke-width="0" fill="#3366cc">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="148" y="323" width="734" height="1" stroke="none"
                                                    stroke-width="0" fill="#333333">
                                                </rect>
                                            </g>
                                            <g>
                                                <rect x="159" y="128" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="180" y="149" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="201" y="149" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="222" y="147" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="243" y="202" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="264" y="221" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="285" y="96" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="306" y="110" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="326" y="145" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="347" y="93" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="368" y="220" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="389" y="195" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="410" y="137" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="431" y="176" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="452" y="225" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="473" y="156" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="494" y="179" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="515" y="155" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="536" y="185" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="557" y="195" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="578" y="123" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="599" y="126" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="620" y="92" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999"></rect>
                                                <rect x="641" y="186" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="662" y="183" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="682" y="122" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="703" y="181" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="724" y="190" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="745" y="182" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="766" y="163" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="787" y="200" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="808" y="262" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="829" y="258" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="850" y="202" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                                <rect x="871" y="148" width="1" height="12" stroke="none"
                                                    stroke-width="0" fill="#999999">
                                                </rect>
                                            </g>
                                        </g>
                                        <g></g>
                                        <g>
                                            <g><text text-anchor="end" x="161.42142857142855" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 161.42142857142855 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">1.
                                                    PROPÓSITO…</text>
                                                <path
                                                    d="M52.41440552108037,386.4378221735089L155.47142857142856,326.9378221735089L162.47142857142856,339.06217782649105L59.41440552108037,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="203.30714285714285" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 203.30714285714285 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">3.
                                                    REVISIÓN PE…</text>
                                                <path
                                                    d="M94.30011980679465,386.4378221735089L197.35714285714286,326.9378221735089L204.35714285714286,339.06217782649105L101.30011980679465,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="245.19285714285712" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 245.19285714285712 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">5.
                                                    PERTINENCI…</text>
                                                <path
                                                    d="M136.18583409250897,386.4378221735089L239.24285714285716,326.9378221735089L246.24285714285716,339.06217782649105L143.18583409250897,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="287.0785714285714" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 287.0785714285714 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">7.
                                                    SISTEMA DE…</text>
                                                <path
                                                    d="M178.0715483782232,386.4378221735089L281.12857142857143,326.9378221735089L288.12857142857143,339.06217782649105L185.0715483782232,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="328.9642857142857" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 328.9642857142857 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">9.
                                                    PLAN DE ES…</text>
                                                <path
                                                    d="M219.95726266393754,386.4378221735089L323.01428571428573,326.9378221735089L330.01428571428573,339.06217782649105L226.95726266393754,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="370.84999999999997" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 370.84999999999997 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">11.
                                                    ENFOQUE P…</text>
                                                <path
                                                    d="M261.8429769496518,386.43782217350895L364.9,326.93782217350895L371.9,339.06217782649105L268.8429769496518,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="412.73571428571427" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 412.73571428571427 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">13.
                                                    MOVILIDAD</text>
                                            </g>
                                            <g><text text-anchor="end" x="454.62142857142857" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 454.62142857142857 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">15.
                                                    PLANA DOC…</text>
                                                <path
                                                    d="M345.61440552108036,386.4378221735089L448.6714285714286,326.9378221735089L455.6714285714286,339.06217782649105L352.61440552108036,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="496.50714285714287" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 496.50714285714287 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">17.
                                                    PLAN DE D…</text>
                                                <path
                                                    d="M387.5001198067946,386.43782217350895L490.5571428571428,326.93782217350895L497.5571428571428,339.06217782649105L394.5001198067946,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="538.3928571428571" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 538.3928571428571 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">19.
                                                    NIVELACIÓ…</text>
                                                <path
                                                    d="M429.38583409250884,386.4378221735089L532.4428571428571,326.93782217350895L539.4428571428571,339.06217782649105L436.38583409250884,398.562177826491Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="580.2785714285715" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 580.2785714285715 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">21.
                                                    ACTIVIDAD…</text>
                                                <path
                                                    d="M471.2715483782232,386.4378221735089L574.3285714285714,326.93782217350895L581.3285714285714,339.06217782649105L478.2715483782232,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="622.1642857142858" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 622.1642857142858 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">23.
                                                    I+D+I PARA…</text>
                                                <path
                                                    d="M513.1572626639376,386.43782217350883L616.2142857142858,326.93782217350883L623.2142857142858,339.06217782649105L520.1572626639376,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="664.0500000000001" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 664.0500000000001 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">25.
                                                    RESPONSA…</text>
                                                <path
                                                    d="M555.0429769496517,386.43782217350895L658.0999999999999,326.93782217350895L665.0999999999999,339.06217782649105L562.0429769496517,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="705.9357142857143" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 705.9357142857143 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">27.
                                                    BIENESTAR</text>
                                            </g>
                                            <g><text text-anchor="end" x="747.8214285714287" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 747.8214285714287 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">29.
                                                    MANTENIMI…</text>
                                                <path
                                                    d="M638.8144055210804,386.43782217350895L741.8714285714286,326.93782217350895L748.8714285714286,339.06217782649105L645.8144055210804,398.56217782649105Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="789.7071428571429" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 789.7071428571429 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">31.
                                                    CENTRO D…</text>
                                                <path
                                                    d="M680.7001198067946,386.43782217350883L783.7571428571429,326.9378221735089L790.7571428571429,339.062177826491L687.7001198067946,398.56217782649094Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="831.5928571428572" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 831.5928571428572 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">33.
                                                    LOGRO DE…</text>
                                                <path
                                                    d="M722.5858340925089,386.43782217350895L825.6428571428571,326.93782217350895L832.6428571428571,339.06217782649117L729.5858340925089,398.56217782649117Z"
                                                    stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff">
                                                </path>
                                            </g>
                                            <g><text text-anchor="end" x="873.4785714285715" y="337.24352447854375"
                                                    font-family="Arial" font-size="14"
                                                    transform="rotate(-30 873.4785714285715 337.24352447854375)"
                                                    stroke="none" stroke-width="0" fill="#222222">Porcentaje
                                                    Total</text></g>
                                            <g><text text-anchor="end" x="134" y="328.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">0%</text></g>
                                            <g><text text-anchor="end" x="134" y="287.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">25%</text></g>
                                            <g><text text-anchor="end" x="134" y="246.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">50%</text></g>
                                            <g><text text-anchor="end" x="134" y="205.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">75%</text></g>
                                            <g><text text-anchor="end" x="134" y="164.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">100%</text></g>
                                            <g><text text-anchor="end" x="134" y="123.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">125%</text></g>
                                            <g><text text-anchor="end" x="134" y="82.4" font-family="Arial"
                                                    font-size="14" stroke="none" stroke-width="0"
                                                    fill="#444444">150%</text></g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <rect x="135.5" y="113.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="159" y="125.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">112.41</text><text
                                                            text-anchor="middle" x="159" y="125.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">112.41</text></g>
                                                    <rect x="138" y="114" width="42" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="160.5" y="134.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="180" y="146.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">99.37</text><text
                                                            text-anchor="middle" x="180" y="146.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">99.37</text></g>
                                                    <rect x="162.5" y="135" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="181.5" y="134.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="201" y="146.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">99.56</text><text
                                                            text-anchor="middle" x="201" y="146.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">99.56</text></g>
                                                    <rect x="183.5" y="135" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="198.5" y="132.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="222" y="144.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">100.48</text><text
                                                            text-anchor="middle" x="222" y="144.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">100.48</text></g>
                                                    <rect x="200.5" y="133" width="43" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="223.5" y="187.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="243" y="199.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">67.33</text><text
                                                            text-anchor="middle" x="243" y="199.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">67.33</text></g>
                                                    <rect x="225.5" y="188" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="244.5" y="206.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="264" y="218.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">55.78</text><text
                                                            text-anchor="middle" x="264" y="218.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">55.78</text></g>
                                                    <rect x="246.5" y="207" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="271.5" y="81.5" width="28" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="285" y="93.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">132</text><text
                                                            text-anchor="middle" x="285" y="93.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">132</text></g>
                                                    <rect x="273.5" y="82" width="23" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="292.5" y="95.5" width="28" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="306" y="107.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">123</text><text
                                                            text-anchor="middle" x="306" y="107.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">123</text></g>
                                                    <rect x="294.5" y="96" width="23" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="306.5" y="130.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="326" y="142.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">101.7</text><text
                                                            text-anchor="middle" x="326" y="142.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">101.7</text></g>
                                                    <rect x="308.5" y="131" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="323.5" y="104.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="347" y="116.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">140.78</text><text
                                                            text-anchor="middle" x="347" y="116.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">140.78</text></g>
                                                    <rect x="325.5" y="105" width="43" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="348.5" y="205.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="368" y="217.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">56.37</text><text
                                                            text-anchor="middle" x="368" y="217.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">56.37</text></g>
                                                    <rect x="350.5" y="206" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="369.5" y="180.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="389" y="192.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">71.22</text><text
                                                            text-anchor="middle" x="389" y="192.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">71.22</text></g>
                                                    <rect x="371.5" y="181" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="386.5" y="122.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="410" y="134.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">106.78</text><text
                                                            text-anchor="middle" x="410" y="134.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">106.78</text></g>
                                                    <rect x="388.5" y="123" width="43" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="411.5" y="161.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="431" y="173.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">83.19</text><text
                                                            text-anchor="middle" x="431" y="173.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">83.19</text></g>
                                                    <rect x="413.5" y="162" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="432.5" y="210.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="452" y="222.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">52.93</text><text
                                                            text-anchor="middle" x="452" y="222.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">52.93</text></g>
                                                    <rect x="434.5" y="211" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="453.5" y="141.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="473" y="153.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">95.04</text><text
                                                            text-anchor="middle" x="473" y="153.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">95.04</text></g>
                                                    <rect x="455.5" y="142" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="474.5" y="164.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="494" y="176.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">81.26</text><text
                                                            text-anchor="middle" x="494" y="176.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">81.26</text></g>
                                                    <rect x="476.5" y="165" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="495.5" y="140.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="515" y="152.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">95.74</text><text
                                                            text-anchor="middle" x="515" y="152.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">95.74</text></g>
                                                    <rect x="497.5" y="141" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="516.5" y="170.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="536" y="182.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">77.22</text><text
                                                            text-anchor="middle" x="536" y="182.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">77.22</text></g>
                                                    <rect x="518.5" y="171" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="537.5" y="180.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="557" y="192.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">71.52</text><text
                                                            text-anchor="middle" x="557" y="192.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">71.52</text></g>
                                                    <rect x="539.5" y="181" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="554.5" y="108.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="578" y="120.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">114.96</text><text
                                                            text-anchor="middle" x="578" y="120.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">114.96</text></g>
                                                    <rect x="557" y="109" width="42" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="575.5" y="111.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="599" y="123.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">113.59</text><text
                                                            text-anchor="middle" x="599" y="123.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">113.59</text></g>
                                                    <rect x="578" y="112" width="42" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="600.5" y="103.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="620" y="115.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">141.3</text><text
                                                            text-anchor="middle" x="620" y="115.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">141.3</text></g>
                                                    <rect x="602.5" y="104" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="621.5" y="171.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="641" y="183.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">77.04</text><text
                                                            text-anchor="middle" x="641" y="183.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">77.04</text></g>
                                                    <rect x="623.5" y="172" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="642.5" y="168.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="662" y="180.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">78.56</text><text
                                                            text-anchor="middle" x="662" y="180.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">78.56</text></g>
                                                    <rect x="644.5" y="169" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="658.5" y="107.5" width="48" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="682" y="119.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">116.15</text><text
                                                            text-anchor="middle" x="682" y="119.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">116.15</text></g>
                                                    <rect x="661" y="108" width="42" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="683.5" y="166.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="703" y="178.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">80.11</text><text
                                                            text-anchor="middle" x="703" y="178.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">80.11</text></g>
                                                    <rect x="686" y="167" width="34" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="704.5" y="175.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="724" y="187.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">74.56</text><text
                                                            text-anchor="middle" x="724" y="187.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">74.56</text></g>
                                                    <rect x="706.5" y="176" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="729.5" y="167.5" width="32" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="745" y="179.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">79.3</text><text
                                                            text-anchor="middle" x="745" y="179.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">79.3</text></g>
                                                    <rect x="731.5" y="168" width="27" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="746.5" y="148.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="766" y="160.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">91.11</text><text
                                                            text-anchor="middle" x="766" y="160.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">91.11</text></g>
                                                    <rect x="749" y="149" width="34" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="767.5" y="185.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="787" y="197.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">68.15</text><text
                                                            text-anchor="middle" x="787" y="197.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">68.15</text></g>
                                                    <rect x="769.5" y="186" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="788.5" y="247.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="808" y="259.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">30.59</text><text
                                                            text-anchor="middle" x="808" y="259.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">30.59</text></g>
                                                    <rect x="790.5" y="248" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="809.5" y="243.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="829" y="255.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">33.07</text><text
                                                            text-anchor="middle" x="829" y="255.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">33.07</text></g>
                                                    <rect x="811.5" y="244" width="35" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="830.5" y="187.5" width="40" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="850" y="199.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">67.11</text><text
                                                            text-anchor="middle" x="850" y="199.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">67.11</text></g>
                                                    <rect x="833" y="188" width="34" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="857.5" y="133.5" width="28" height="16" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                    <g><text text-anchor="middle" x="871" y="145.9" font-family="Arial"
                                                            font-size="14" stroke="#ffffff" stroke-width="3"
                                                            fill="#3366cc" aria-hidden="true">100</text><text
                                                            text-anchor="middle" x="871" y="145.9" font-family="Arial"
                                                            font-size="14" stroke="none" stroke-width="0"
                                                            fill="#3366cc">100</text></g>
                                                    <rect x="859.5" y="134" width="23" height="14" stroke="none"
                                                        stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                    style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Estandar</th>
                                                <th>Avance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. PROPÓSITOS ARTICULADOS</td>
                                                <td>112.41</td>
                                            </tr>
                                            <tr>
                                                <td>2. PARTICIPACIÓN DE LOS GRUPOS DE INTERÉS</td>
                                                <td>99.37</td>
                                            </tr>
                                            <tr>
                                                <td>3. REVISIÓN PERIÓDICA Y PARTICIPATIVA DE LAS
                                                    POLÍTICAS Y OBJETIVOS
                                                </td>
                                                <td>99.56</td>
                                            </tr>
                                            <tr>
                                                <td>4. SOSTENIBILIDAD</td>
                                                <td>100.48</td>
                                            </tr>
                                            <tr>
                                                <td>5. PERTINENCIA DEL PERFIL DE EGRESO</td>
                                                <td>67.33</td>
                                            </tr>
                                            <tr>
                                                <td>6. REVISIÓN DEL PERFIL DE EGRESO</td>
                                                <td>55.78</td>
                                            </tr>
                                            <tr>
                                                <td>7. SISTEMA DE GESTIÓN DE LA CALIDAD (SGC)</td>
                                                <td>132</td>
                                            </tr>
                                            <tr>
                                                <td>8. PLANES DE MEJORA</td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td>9. PLAN DE ESTUDIOS</td>
                                                <td>101.7</td>
                                            </tr>
                                            <tr>
                                                <td>10. CARACTERÍSTICAS DEL PLAN DE ESTUDIOS</td>
                                                <td>140.78</td>
                                            </tr>
                                            <tr>
                                                <td>11. ENFOQUE POR COMPETENCIAS</td>
                                                <td>56.37</td>
                                            </tr>
                                            <tr>
                                                <td>12. ARTICULACIÓN CON I+D+I Y RESPONSABILIDAD SOCIAL
                                                </td>
                                                <td>71.22</td>
                                            </tr>
                                            <tr>
                                                <td>13. MOVILIDAD</td>
                                                <td>106.78</td>
                                            </tr>
                                            <tr>
                                                <td>14. SELECCIÓN, EVALUACIÓN, CAPACITACIÓN Y
                                                    PERFECCIONAMIENTO</td>
                                                <td>83.19</td>
                                            </tr>
                                            <tr>
                                                <td>15. PLANA DOCENTE ADECUADA</td>
                                                <td>52.93</td>
                                            </tr>
                                            <tr>
                                                <td>16. RECONOCIMIENTO DE LAS ACTIVIDADES DE LABOR
                                                    DOCENTE</td>
                                                <td>95.04</td>
                                            </tr>
                                            <tr>
                                                <td>17. PLAN DE DESARROLLO ACADÉMICO</td>
                                                <td>81.26</td>
                                            </tr>
                                            <tr>
                                                <td>18. ADMISIÓN AL PROGRAMA DE ESTUDIOS</td>
                                                <td>95.74</td>
                                            </tr>
                                            <tr>
                                                <td>19. NIVELACIÓN DE INGRESANTES</td>
                                                <td>77.22</td>
                                            </tr>
                                            <tr>
                                                <td>20. SEGUIMIENTO AL DESEMPEÑO DE LOS ESTUDIANTES</td>
                                                <td>71.52</td>
                                            </tr>
                                            <tr>
                                                <td>21. ACTIVIDADES EXTRACURRICULARES</td>
                                                <td>114.96</td>
                                            </tr>
                                            <tr>
                                                <td>22. GESTIÓN Y CALIDAD DE LA I+D+I REALIZADA POR
                                                    DOCENTES</td>
                                                <td>113.59</td>
                                            </tr>
                                            <tr>
                                                <td>23. I+D+I PARA LA OBTENCIÓN DEL GRADO Y EL TÍTULO
                                                </td>
                                                <td>141.3</td>
                                            </tr>
                                            <tr>
                                                <td>24. PUBLICACIÓN DE LOS RESULTADOS DE I+D+I</td>
                                                <td>77.04</td>
                                            </tr>
                                            <tr>
                                                <td>25. RESPONSABILIDAD SOCIAL</td>
                                                <td>78.56</td>
                                            </tr>
                                            <tr>
                                                <td>26. IMPLEMENTACIÓN DE POLÍTICAS AMBIENTALES</td>
                                                <td>116.15</td>
                                            </tr>
                                            <tr>
                                                <td>27. BIENESTAR</td>
                                                <td>80.11</td>
                                            </tr>
                                            <tr>
                                                <td>28. EQUIPAMIENTO Y USO DE LA INFRAESTRUCTURA</td>
                                                <td>74.56</td>
                                            </tr>
                                            <tr>
                                                <td>29. MANTENIMIENTO DE LA INFRAESTRUCTURA</td>
                                                <td>79.3</td>
                                            </tr>
                                            <tr>
                                                <td>30. SISTEMA DE INFORMACIÓN Y COMUNICACIÓN</td>
                                                <td>91.11</td>
                                            </tr>
                                            <tr>
                                                <td>31. CENTRO DE INFORMACIÓN Y REFERENCIA</td>
                                                <td>68.15</td>
                                            </tr>
                                            <tr>
                                                <td>32. RECURSOS HUMANOS PARA LA GESTIÓN DEL PROGRAMA DE
                                                    ESTUDIOS</td>
                                                <td>30.59</td>
                                            </tr>
                                            <tr>
                                                <td>33. LOGRO DE COMPENTENCIAS</td>
                                                <td>33.07</td>
                                            </tr>
                                            <tr>
                                                <td>34. SEGUIMIENTO A EGRESADOS Y OBJETIVOS
                                                    EDUCACIONALES</td>
                                                <td>67.11</td>
                                            </tr>
                                            <tr>
                                                <td>Porcentaje Total</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 1040px; white-space: nowrap; font-family: Arial; font-size: 14px;">
                            Avance</div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection