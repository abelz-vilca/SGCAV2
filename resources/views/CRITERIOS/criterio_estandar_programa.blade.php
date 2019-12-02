@extends('layouts.plantilla')

@section('name')


<div align="center" class="container-fluid container-my-4">
    <h4>CALIFICACION DE LOS CRITERIOS</h4>

</div>
<div class="container-fluid" class="container-my-4">

    <table class="table table-striped table-bordered" id="estandar_detalle" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-info">
                <th scope="col">#ID</th>
                <th scope="col">Archivo</th>
                <th scope="col">Calificacion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Justificacion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Criterio_id</th>
                <th scope="col">Estandar_id</th>
                <th scope="col">Programa_id</th>
                {{-- <th scope="col">P_id</th> --}}
                <th align="center" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($criterio_estandar as $item )
            <tr disabled="disabled" class="table-light">
                <th scope="row">{{$item->id}}</th>
                <td align="center">{{$item->archivo}}</td>
                <td align="center">{{$item->calificacion}}</td>
                <td align="center">{{$item->descripcion}}</td>
                <td align="center">{{$item->justificacion}}</td>
                <td align="center">{{$item->fecha}}</td>
                <td align="center">{{$item->criterio_id}}</td>
                <td align="center">{{$item->estandar_id}}</td>
                <td align="center">{{$item->programa_id}}</td>
                <td class="" align="center">

                    <a href="" type="button" class="btn btn-info">Criterios</a>
                </td>
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
            table.rows('.important').deselect();            
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