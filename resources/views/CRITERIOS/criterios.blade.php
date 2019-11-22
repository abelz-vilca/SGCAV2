@extends('layouts.plantilla')

@section('name')

<link rel="stylesheet" href="{{asset('tablas/css/dataTables.bootstrap4.min.css')}}">


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="background-color: #BDD7D6;">
                <table class="table table-striped table-bordered" id="editable-datatable">
                    <thead>
                        <tr align="center" class="bg-success">
                            <th scope="col">#ID</th>
                            <th scope="col">CRITERIOS A EVALUAR</th>


                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($criterios as $item )
                        <tr class="table-info">
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nombre_criterio}}</td>
                            <td>
                                <a href="" type="button" class="btn btn-info"><i class=" fa fa-file"> </i>IR</a>
                            </td>
                        </tr>
                        @endforeach()

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Editable -->
<script src="{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
<script src="{{asset('assets/plugins/tiny-editable/numeric-input-example.js')}}"></script>
<script>
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#editable-datatable').DataTable({
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