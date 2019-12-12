@extends('layouts.plantilla')

@section('name')


<link rel="stylesheet" href="{{asset('tablas/css/dataTables.bootstrap4.min.css')}}">



<div class="card">
    <div class="card-header">
        PROGRAMA(S) DE ESTUDIO(S)
    </div>
    <div class="card">
        <div class="card-body" style="background-color: #BDD7D6;">
            <div class="table-responsive m-t-10">
                <table class="display nowrap table table-hover table-striped table-bordered" id="editable-datatable"
                    style="width:100%">
                    <thead>
                        <tr align="center" class="bg-success">
                            <th>N°</th>
                            <th>PROGRAMAS DE ESTUDIOS</th>
                            <th>CUI</th>

                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($programas as $item )
                        <tr class="table-info">
                            <th>{{$item->id}}</th>
                            <td width="10px"> {{$item->nombre_programa}}</td>
                            <td>{{$item->CUI}}</td>

                            <td>
                                {{-- para calificar estandar--}}

                                <a href="{{route('criterio_programaid', $item)}}">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-primary">CRITERIOS</button>
                                </a> <a href="{{route('estandar_programaid', $item)}}">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-warning">
                                        ESTANDAR
                                    </button>
                                </a>
                                <a href="{{route('docs_programaid', $item)}}">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-success">Doc</button>
                                </a>

                                {{-- <a href="{{route('criterio_programaid', $item)}}" type="button" class="btn
                                waves-effect waves-light btn-rounded btn-outline-info">
                                <ion-icon name="clipboard"></ion-icon>
                                CRITERIOS
                                </a> --}}



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