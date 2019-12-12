@extends('layouts.plantilla')

@section('name')

<div class="card-header">
    Reportes
</div>
<table class="table table-striped table-bordered" id="estandar_detalle" align="center">
    <thead class="table table-striped">
        <tr align="center" class="bg-info">
            <th scope="col">N°</th>
            <th scope="col">Documento</th>
            <th scope="col">Num de Reporte</th>
            <th scope="col">programaID</th>
            <th align="center" scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($estandarprograma as $item ) --}}
        @foreach ($docus as $item)
        <tr disabled="disabled" class="table-light">
            <th scope="row">{{$item->id}}</th>
            <td><a href="{{Storage::url($item->reportes)}}" target="_blank">verificar archivo</a></td>
            <td>{{$item->Descripcion}}</td>
            <td> {{$item->programa_id}}</td>
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