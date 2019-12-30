@extends('layouts.plantilla')

@section('name')

<div class="card-header">
  Reportes
</div>
<table class="table table-striped table-bordered" id="estandar_detalle" align="center">
  <thead class="table table-striped">
    <tr class="bg-info">
      <th scope="col">N°</th>
      <th scope="col">Documento</th>
      <th scope="col">Num de Reporte</th>
      <th scope="col">Fecha</th>
      <th scope="col">Programas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    {{-- @foreach ($estandarprograma as $item ) --}}
    @foreach ($docus as $item)
    <tr disabled="disabled" class="table-light">
      <th scope="row">{{$item->id}}</th>
      <td><a href="{{Storage::url($item->reportes)}}" target="_blank"><img border="0"
            src="{{asset('iconos/pdficon.png')}}" width="40" height="40">verificar archivo</a></td>
      <td>{{$item->Descripcion}}</td>
      <td>{{$item->fecha}}</td>
      <td> <?php
                if ($item->programa_id==1){
                  echo "INGENIERÍA AGRONOMÍA";
                } elseif ($item->programa_id==2) {
                  echo "INGENIERÍA AGRÍCOLA";
                } elseif ($item->programa_id==3) {
                  echo " INGENIERÍA AGROFORESTAL";
                } elseif ($item->programa_id==4) {
                  echo " MEDICINA VETERINARIA";
                }elseif ($item->programa_id==5) {
                  echo " ESCUELA PROFESIONAL DE BIOLOGÍA";
                } elseif ($item->programa_id==6) {
                  echo " EDUCACIÓN INICIAL";
                } elseif ($item->programa_id==7) {
                  echo " EDUCACIÓN PRIMARIA";
                }elseif ($item->programa_id==8) {
                  echo " EDUCACIÓN SECUNDARIA-Ingles y Lengua Española";
                } elseif ($item->programa_id==9) {
                  echo " EDUCACIÓN SECUNDARIA-Matemática Física e Informática";
                } elseif ($item->programa_id==10) {
                  echo " EDUCACIÓN SECUNDARIA-Ciencias Sociales y Filosofia con mencion en Turismo";
                }elseif ($item->programa_id==11) {
                  echo " EDUCACIÓN SECUNDARIA-Lengua Española y Literatura con mencion en comunicación";
                } elseif ($item->programa_id==12) {
                  echo " EDUCACIÓN FÍSICA";
                } elseif ($item->programa_id==13) {
                  echo " ADMINISTRACIÓN DE EMPRESAS";
                } elseif ($item->programa_id==14) {
                  echo " CONTABILIDAD Y AUDITORÍA";
                }elseif ($item->programa_id==15) {
                  echo " ECONOMÍA";
                } elseif ($item->programa_id==16) {
                  echo " CIENCIAS DE LA COMUNICACIÓN";
                } elseif ($item->programa_id==17) {
                  echo " CIENCIAS DE ARQUEOLOGÍA E HISTORIA";
                }elseif ($item->programa_id==18) {
                  echo " CIENCIAS DE ANTROPOLOGÍA SOCIAL";
                } elseif ($item->programa_id==19) {
                  echo "  CIENCIAS DE TRABAJO SOCIAL";
                } elseif ($item->programa_id==20) {
                  echo "  DERECHO";
                }elseif ($item->programa_id==21) {
                  echo "  INGENIERÍA CIVIL";
                } elseif ($item->programa_id==22) {
                  echo "  INGENIERÍA DE MINAS";
                } elseif ($item->programa_id==23) {
                  echo "  INGENIERÍA DE SISTEMAS";
                } elseif ($item->programa_id==24) {
                  echo "  CIENCIAS FÍSICO MATEMÁTICAS-Estadistica";
                }elseif ($item->programa_id==25) {
                  echo " CIENCIAS FÍSICO MATEMÁTICAS-Matemática";
                } elseif ($item->programa_id==26) {
                  echo "  CIENCIAS FÍSICO MATEMÁTICAS-Física";
                } elseif ($item->programa_id==27) {
                  echo " INGENIERÍA QUÍMICA";
                }  elseif ($item->programa_id==28) {
                  echo " INGENIERÍA EN INDUSTRIAS ALIMENTARIASL";
                }elseif ($item->programa_id==29) {
                  echo "  INGENIERÍA AGROINDUSTRIAL";
                } elseif ($item->programa_id==30) {
                  echo " MEDICINA HUMANA";
                } elseif ($item->programa_id==31) {
                  echo " FARMACIA Y BIOQUÍMICA";
                }elseif ($item->programa_id==32) {
                  echo " OBSTETRICIA";
                } elseif ($item->programa_id==33) {
                  echo "ENFERMERÍA";
                }else {
                 echo "otro programa";
                }
                                            ?>
      </td>
      <td class="" align="center">
        <a href="">
          <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-danger ">
            Editar</button>
        </a>
      </td>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
{{-- @include('modal') --}}
</div>


<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- Editable -->
<script src="../assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="../assets/plugins/tiny-editable/numeric-input-example.js"></script>
<script>
  $('#estandar_detalle').editableTableWidget().numericInputExample().find('td:first').focus();
            $(document).ready(function() {
                $('#estandar_detalle').DataTable({
        "language": lenguaje_espanol
        // table.rows('.important').deselect();          
    } );
               
            });

            var lenguaje_espanol = {
"sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
}
</script>

@endsection