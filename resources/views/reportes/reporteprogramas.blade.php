@extends('layouts.plantilla')
@section('name')
<div align="center" class="container-my-2">
</div>
<div class="container-fluid">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
    <div class="card-header">
        Verificación de archivos
    </div>
    <div class="table-responsive m-t-10">
    <table class="display nowrap table table-hover table-striped table-bordered" id="reporte">
        <thead>
            <tr class="bg-danger">
                <th scope="col">N°</th>
                <th scope="col">PROGRAMAS</th>
                <th scope="col">CUI</th>
                <th class="col">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($programas as $item )
            <tr class="d-flex">
                <th scope="row">{{$item->id}}</th>
                <td >{{$item->nombre_programa}}</td>
                <td>{{$item->CUI}}</td>

                <td>
                    <a href="{{route('listardetalles', $item)}}" type="button" class="btn btn-danger">Ver
                        Doc</a>
                        <a href="{{route('sumacalificacion', $item)}}" type="button" class="btn btn-info">Estandar
                                total</a>

                                <a href="{{route('graficofactor',$item)}}" type="button" class="btn btn-secondary">
                                        Factor total
                                    </a>

                                    <a href="{{route('graficodimension',$item)}}" type="button" class="btn btn-warning">Dimensión Total
                                        </a>
                                        <a href="{{route('graficocaed',$item)}}" type="button" class="btn btn-secondary">E</a>
                </td>
                {{-- <td> <a href="{{route('sumacalificacion', $item)}}" type="button" class="btn btn-info">Estandar
                        total</a></td>
                <td> <a href="{{route('graficofactor',$item)}}" type="button" class="btn btn-secondary">
                        Factor total
                    </a></td>
                <td> <a href="{{route('graficodimension',$item)}}" type="button" class="btn btn-warning">Dimensión Total
                    </a></td>
                <td> <a href="{{route('graficocaed',$item)}}" type="button" class="btn btn-secondary">E</a></td> --}}

            </tr>
            @endforeach()
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- Editable -->
<script src="../assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="../assets/plugins/tiny-editable/numeric-input-example.js"></script>
<script>
    $('#reporte').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#reporte').DataTable({
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
@endsection()