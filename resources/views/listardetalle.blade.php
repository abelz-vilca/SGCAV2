@extends('layouts.plantilla')
@section('name')
<div align="center">

    <p>LINK DE LOS ARCHIVOS DE LOS ESTANDARES</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h4>PROGRAMA SELECCIONADO</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                    value="{{$programas->nombre_programa}}"></p>
        </div>
        <div class="col-sm-4">
            <h4 class="fas fa-align-right">Num de Programa</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas->id}}"></p>
        </div>
        <div class="col-sm-4">
            <h4>Código Unico de Identificacion</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas->CUI}}"></p>
        </div>
    </div>
    <table class="table table-striped table-bordered" id="link_archivo">
        <thead>
            <tr align="center" class="bg-success">
                <th>#ID</th>
                <th>LINK DEL ARCHIVO</th>
                <th>calificacion</th>
                <th>FECHA</th>
                <th>ESTANDAR</th>
                {{-- <th>PROGRAMA</th> --}}
                {{-- <th>Acciones</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($estandarprograma as $item )
            <tr align="center">
                <th scope="row">{{$item->id}}</th>
                <td>
                    <a href="{{Storage::url($item->archivo)}}" target="_blank">Abrir Documento del Estándar :
                        {{$item->id}}</a>
                    {{-- <a href="{{$item->link}}" target="_blank">{{$item->link}}</a> --}}
                    {{-- <a href="{{route('linkarchivo', $item->id)}}">{{$item->link}}</a> --}}
                </td>
                <td>{{$item->calificacion}}</td>
                <td>{{$item->fecha}}</td>
                <td>{{$item->estandar_id}}</td>
                {{-- <td>{{$item->programa_id}}</td> --}}
                {{-- <td> --}}
                {{-- <a href="" type="button" class="btn btn-primary">VER PUNTAJE</a> --}}
                {{-- <button type="button" class="btn btn-primary">CALIFICAR</button></td> --}}
                {{-- </td> --}}
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
    $('#link_archivo').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#link_archivo').DataTable({
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