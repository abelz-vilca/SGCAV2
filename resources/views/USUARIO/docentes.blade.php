@extends('layouts.plantilla')

@section('name')

<div align="center" class="container-fluid container-my-4">
    <h3 class="card-title" class="fixed-top">Docentes Usuarios</h3>
    <hr>
</div>
<div class="container-fluid" class="container-my-4">

    <table class="table table-striped table-bordered" id="estandar_detalle" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-info">
                <th scope="col">#ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Email(User)</th>
                <th scope="col">Celular</th>
                <th scope="col">password(CUI)</th>
                <th scope="col">programa_id</th>
                {{-- <th scope="col">estandar_NAME</th> --}}
                {{-- <th scope="col">P_id</th> --}}
                <th align="center" scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>

            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($usuarios as $iteme )
            <tr disabled="disabled" class="table-light">
                <th scope="row">{{$iteme->id}}</th>
                <td>{{$iteme->nombres}}</td>
                <td align="center">{{$iteme->apellido_paterno}}</td>
                <td align="center">{{$iteme->apellido_materno}}</td>
                <td align="center">{{$iteme->email}}</td>
                <td align="center">{{$iteme->cel}}</td>
                <td align="center"><a href="https://www.google.com" target="_blank">password</a></td>
                <td>{{$iteme->programa_id}}</td>



                <td class="" align="center">
                    <a href="" type="buttones" class="btn btn-warning" padding>. Editar ..</a>
                    <a href="" type="buttones" class="btn btn-danger" font-size: 12px;>Eliminar</a>
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