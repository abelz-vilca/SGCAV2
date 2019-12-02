@extends('layouts.plantilla')

@section('name')

<div align="center">

    <h1>CALIFICACION DE ESTANDARES</h1>

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h4>PROGRAMA DE ESTUDIOS</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                    value="{{$programas->nombre_programa}}"></p>
        </div>

        <div class="col-sm-4">
            <h4>Código Unico de Identificacion (CUI)</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas->CUI}}"></p>
        </div>
    </div>
    <table class="table table-striped table-bordered" id="tabla-detalle" align="center">
        <thead class="table table-striped">
            <tr class="bg-success" align="center">
                <th>#ID</th>
                <th>Archivo</th>
                <th>Calificación</th>
                <th>Fecha de Modificación</th>
                <th>Estandar</th>
                {{-- <th>P</th> --}}
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estandarprograma as $item )

            <tr class="table-info">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->link}}</td>
                <td align="center">{{$item->calificacion}}</td>
                <td align="center">{{$item->fecha}}</td>
                <td align="center">{{$item->estandar_id}}</td>
                {{-- <td>{{$item->programa_id}}</td> --}}
                <td>

                    <a href="{{route('estandar_programaid', $item)}}" type="button" class="btn btn-primary"><i
                            class="fa fa-battery-full    "></i> Calificar Estandar</a>
                    {{-- <a href="" class="btn btn-warning pull-right" data-toggle="modal" data-target="#create">Ver</a> --}}
                    {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                </td>


            </tr>

            @endforeach
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
    $('#tabla-detalle').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#tabla-detalle').DataTable({
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

<script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
</script>

@endsection