@extends('layouts.plantilla')

@section('name')


<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body" style="background-color: #BDD7D6;">

                @if (session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}
                </div>
                @endif
                <form method="POST" action="" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    @error('archivo')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No ha seleccionado ningun Archivo
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="fecha">DESCRIPCION</label>
                                    <textarea class="form-control" rows="5" id="comment"
                                        placeholder="El programa de estudios ha definido claramente el número y las características los miembros de sus grupos de interés, quienes han participado y participan en procesos de consulta para la definición de los propósitos del programa de estudios."></textarea>

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="calificacion">CUMPLIMIENTO</label>
                                    {{-- <a href="#" class="btn btn-warning pull-right" data-toggle="modal"
                                                data-target="#myModal"><img src="{{asset('imagenes/ver.png')}}"
                                    width="25"
                                    height="20" class="d-inline-block align-top" alt="">
                                    Ver Tabla de Calificación</a> --}}
                                    <div class="controls">
                                        <select name="calificacion" id="calificacion" required class="form-control">
                                            {{-- <select name="calificacion" required class="form-control"> --}}
                                            <option value="">
                                                Seleccione el Cumplimiento</option>
                                            <option value="1">SI CUMPLE</option>
                                            </option>
                                            <option value="2">NO CUMPLE</option>


                                        </select>
                                    </div>

                                </div>
                                {{-- <div class="form-group col-md-12">
                                    <label for="basic-url">SELECIONE EL DOCUMENTO</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <input type="file" class="form-control-file" name="archivo" id="archivo">
                                        </div>

                                        {{-- <input type="text" name="link" class="form-control" value="{{old('link')}}">
                                --}}
                                {{-- <input type="text" name="link" class="form-control"
                                            value=""> 

                                    </div>
                                </div> --}}


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="estandar_id">JUSTIFICACION</label>
                                    <input type="text" class="form-control" value="">

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="fecha">Fecha de calificación</label>
                                    <input disabled="disabled" type="text" name="fecha" class="form-control"
                                        value="<?php echo date("d/m/Y"); ?>" />
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="estandar_id">Estandar</label>
                                    <input disabled="disabled" type="text" class="form-control" value="">

                                </div>
                            </div>
                        </div>

                    </div>
                    <input style='width:200px; height:50px' type="submit" class="btn btn-success" value="Guardar">

                </form>
            </div>

        </div>
    </div>

    <div class="container-fluid" class="container-my-4">

        <table class="table table-striped table-bordered" id="estandar_detalle" align="center">
            <thead class="table table-striped">
                <tr align="center" class="bg-info">
                    <th scope="col">#ID</th>
                    {{-- <th scope="col">Archivo</th> --}}
                    <th scope="col">Cumplimiento</th>
                    {{-- <th scope="col">Descripcion</th> --}}
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
                @foreach ($showlistacriterioid as $item )
                <tr disabled="disabled" class="table-light">
                    <th scope="row">{{$item->id}}</th>
                    {{-- <td align="center">{{$item->archivo}}</td> --}}
                    <td align="center">{{$item->calificacion}}</td>
                    {{-- <td align="center">{{$item->descripcion}}</td> --}}
                    <td align="center">{{$item->justificacion}}</td>
                    <td align="center">{{$item->fecha}}</td>
                    <td align="center">{{$item->criterio_id}}</td>
                    <td align="center">{{$item->estandar_id}}</td>
                    <td align="center">{{$item->programa_id}}</td>
                    <td class="" align="center">

                        <a href="{{route('criterio_editprogramaid', $item)}}" type="button"
                            class="btn btn-info">CALIFICAR</a>
                        <a href="" type="button" class="btn btn-info">ANEXOS</a>
                    </td>

                </tr>

                @endforeach()
            </tbody>
        </table>
    </div>
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


@endsection()