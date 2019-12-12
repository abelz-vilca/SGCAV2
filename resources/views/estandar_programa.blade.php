@extends('layouts.plantilla')

@section('name')



<div class="container-fluid" class="container-my-4">

    <div class="card-header">
        CALIFICACIÓN DE LOS ESTÁNDARES
    </div>
    <table class="table table-striped table-bordered" id="estandar_detalle" align="center">
        <thead class="table table-striped">
            <tr align="center" class="bg-info">
                <th scope="col">#ID</th>
                <th scope="col">Documento</th>
                <th scope="col">Calificacion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha calificacion</th>
                <th scope="col">Estandar</th>
                {{-- <th scope="col">programa</th> --}}
                {{-- <th scope="col">estandar_NAME</th> --}}
                {{-- <th scope="col">P_id</th> --}}
                <th align="center" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($devolverprograma as $iteme )
            <tr disabled="disabled" class="table-light">
                <th scope="row">{{$iteme->id}}</th>
                <td><a href="{{Storage::url($iteme->archivo)}}" target="_blank">verificar archivo</a></td>
                <td align="center">{{$iteme->calificacion}}</td>
                <td align="center">{{$iteme->descripcion}}</td>
                <td align="center">{{$iteme->fecha}}</td>
                <td align="center">Estándar: {{$iteme->estandar_id}}</td>
                {{-- <td align="center">{{$iteme->programa_id}}</td> --}}
                {{-- <td>{{$iteme->nombre_estandar}}</td> --}}

                {{-- <td>{{$iteme->programa_id}}</td> --}}
                {{--// <td>{{$iteme->programa_id}}</td> --}}
                {{-- <td>{{$item->programa_id}}</td> --}}

                <td class="" align="center">

                    <a href="{{route('programas.editar', $iteme)}}">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success ">
                            Calificar</button>
                    </a>

                    {{-- <a href="" type="button" class="btn btn-info">Criterios</a> --}}
                </td>
                {{-- <a href="{{Storage::url($iteme->archivo)}}" target="_blank" type="button" class="btn btn-info">
                <img src="{{asset('imagenes/internet.png')}}" width="30" height="30">

                Verificar </a> --}}

                </td>
            </tr>
            {{-- @foreach ($devolverisprograma as $iteme )
                <tr>
                    <td>{{$iteme->programa_id}}</td>
            </tr> --}}
            {{-- @endforeach() --}}
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


@endsection()