@extends('layouts.plantilla')

@section('name')
<div class="container-fluid" class="container-my-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header" style="background-color: #success">
                DOCUMENTOS
            </div>
            <div class="card">
                <div class="card-body" style="background-color: #f6f6f6">
                    @if (session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('subir.doc')}}" enctype="multipart/form-data">
                        <div class="form-body">
                            {{-- @method('PUT') --}}
                            @csrf
                            @error('Descripcion')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                indique en numero de Reporte
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Programa de Estudio</label>
                                        <input disabled="false" type="text" class="form-control"
                                            value="<?php echo($id->nombre_programa); ?>" placeholder="programa">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input disabled="false" type="text" class="form-control"
                                            value="<?php echo date("d/m/Y"); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Director(a) (Usuario logueado)</label>

                                        <input disabled="false" type="text" class="form-control"
                                            value="<?php echo  (auth()->user()->name); ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="row" style="background-color: #dddddd">
                                <div class="col-md-5" style="background-color: #c3c3c3">
                                    <div class="form-group">
                                        <label for="archivo">SELECIONE EL DOCUMENTO</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <input type="file" class="form-control-file" name="reportes"
                                                    id="archivo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="Descripcion">Reporte</label>
                                        <div class="controls">
                                            <select name="Descripcion" id="Descripcion" required class="form-control">
                                                <option value="">
                                                    --Seleccione su Reporte--</option>
                                                <option value="PRIMER REPORTE">Primer Reporte</option>

                                                <option value="SEGUNDO REPORTE">Segundo Reporte</option>
                                                <option value="TERCER REPORTE">Tercer Reporte</option>

                                                <option value="CUARTO REPORTE">Cuarto Reporte</option>
                                                <option value="QUINTO REPORTEs">Quinto Reporte</option>

                                                <option disabled="true" value="">Sexto Reporte</option>

                                            </select>

                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="fecha">Seleccione Reporte</label>
                                        <input textarea class="form-control" name="Descripcion"
                                            placeholder="Quinto Reporte"></textarea>
                                    </div> --}}
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="fecha">ID</label>
                                        <input type="text" class="form-control" name="programa_id"
                                            value="<?php echo($id->id); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="card-header">
        Reportes
    </div>
    <table class="display nowrap table table-hover table-striped table-bordered" id="estandar_detalle">
        <thead class="table table-striped">
            <tr class="bg-info">
                <th scope="col">N°</th>
                <th scope="col">Documento</th>
                <th scope="col">Num de Reporte</th>
                <th scope="col">Fecha de Cambio</th>
                {{-- <th scope="col">programaID</th> --}}
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($docs as $item)
            <tr disabled="disabled" class="table-light">
                <th scope="row">{{$item->id}}</th>
                <td><a href="{{Storage::url($item->reportes)}}" target="_blank">
                        {{-- <img border="0" src="{{asset('iconos/pdficon.png')}}" width="40" height="40"> --}}
                        verificar archivo subido</a>
                </td>
                <td>{{$item->Descripcion}}</td>
                <td>{{$item->fecha}}</td>
                {{-- <td> {{$item->programa_id}}</td> --}}
                <td>
                    {{-- https://docs.google.com/viewer?url=http --}}
                    <a href="{{Storage::url( $item->reportes)}}" target="_blank"><img border="0"
                            src="{{asset('iconos/pdficon.png')}}" width="40" height="40">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-info ">
                            Ver ARCHIVO</button>
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

@endsection()