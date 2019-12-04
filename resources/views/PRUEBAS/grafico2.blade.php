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
          ['Finalizado',87.919389978214],

          ["Sin Avance",12.080610021786],

        ]);

        var options = {
          title: 'GRÁFICA GLOBAL DE LA U'
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
<div class="row">
    <div class="col s12 m12 112">

        <div class="card-panel">
            <h3 class="header2">AVANCE GLOBAL</h3>
            <div class="row">

                <div id="piechart" style="width: 100%; height: 500px;"></div>

                <h4 class="header2">RANKING</h4>

                <div id="carreras" style="width: 100%; min-height: 400px;"></div>

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
            <div id="divDimension" style="width: 100%; min-height: 400px;"></div>
            <div id="divfactor" style="width: 100%; min-height: 400px;"></div>
            <div id="dual_y_div" style="width: 100%; min-height: 400px;"></div>