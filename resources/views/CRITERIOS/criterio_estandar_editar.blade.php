@extends('layouts.plantilla')

@section('name')

<div class="container-fluid" class="container-my-4">

    <div class="card-header">
        CALIFICACÓN DE LOS CRITERIOS
    </div>
    <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%"
        id="estandar_detalle" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-info">
                <th scope="col">N°</th>
                <th scope="col">Archivo</th>
                <th scope="col">Cumplimiento</th>
                {{-- <th scope="col">Descripcion</th> --}}
                <th scope="col">Justificacion</th>
                <th scope="col">Fecha</th>
                {{-- <th scope="col">C</th>
                <th scope="col">E</th>
                <th scope="col">P</th> --}}
                {{-- <th scope="col">P_id</th> --}}
                <th disabled="disabled" scope="col">Accion</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($devolverprograma as $item )
            <tr class="table-light">
                <th scope="row">{{$item->id}}</th>
                <td align="center"><a href="{{Storage::url($item->archivo)}}" target="_blank">verificar Doc.
                        criteerio
                    </a>
                </td>
                <td align="center">
                    {{-- {{$item->calificacion}} --}}
                    <?php
                                      if ($item->calificacion==1){
                                        echo "SI";
                                    }else{
                                        echo "";
                                    }
                                                                  ?>
                </td>
                {{-- <td align="center">{{$item->descripcion}}</td> --}}
                <td align="center">{{$item->justificacion}}</td>
                <td align="center">{{$item->fecha}}</td>
                {{-- <td align="center">{{$item->criterio_id}}</td>
                <td align="center">{{$item->estandar_id}}</td>
                <td align="center">{{$item->programa_id}}</td> --}}
                <td>

                    <a href="{{route('criterio.editar', $item)}}">

                        <button type="button"
                            class="btn waves-effect waves-light btn-rounded btn-outline-primary">Calificar</button>
                    </a>
                    {{-- <a href="{{Storage::url($item->archivo)}}" target="_blank" type="button"
                    class="btn btn-info">Verificar Documento</a> --}}
                </td>
                <td disabled="disabled">
                    {{-- 
                                <a href="{{Storage::url($item->archivo)}}" target="_blank" type="button"
                    class="btn btn-warning"><img src="{{asset('imagenes/check.png')}}" width="20" height="20">por
                    verificar</a> --}}
                    <button disabled="disabled" type="button"
                        class="btn waves-effect waves-light btn-rounded btn-outline-success" data-toggle="button"
                        aria-pressed="false">
                        <i class="ti-settings text" aria-hidden="true"></i>
                        <span class="text">por Verificar</span>
                        <i class="ti-check text-active" aria-hidden="true"></i>
                        <span class="text-active">Verificado</span>
                    </button>


                </td>

            </tr>

            @endforeach()
        </tbody>
    </table>

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


@endsection()