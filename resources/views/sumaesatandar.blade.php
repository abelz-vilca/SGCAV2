@extends('layouts.plantilla')
@section('name')
<!doctype html>
<html lang="en">

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>PROGRAMA DE ESTUDIOS</h4>
                <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                        value="{{$programas->nombre_programa}}"></p>
            </div>
            {{-- <div class="col-sm-4">
                    <h4 class="fas fa-align-right">id</h4>
                    <p><input disabled="disabled" class="form-control" type="text" name="fecha"
                            value="{{$programas->id}}"></p>
        </div> --}}
        <div class="col-sm-4">
            <h4>Código Unico de Identificacion</h4>
            <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$programas->CUI}}"></p>
        </div>
    </div>
    </DIV>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-header">
                    Total de estandares
                </div>
                <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
                    width="100%" id="estandartotal" align="center">
                    <thead class="thead-dark">
                        <tr>
                            <th>#id</th>
                            <th>Calificacion</th>
                            {{-- <th>Fecha</th> --}}
                            {{-- <th>Acciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estandarprograma as $item )
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->calificacion}}</td>
                            {{-- <td>{{$item->fecha}}</td> --}}
                            {{-- <td>
                                    <a disabled="disabled" href="" type="button" class="btn btn-info">Información</a>
                                    </td> --}}

                        </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>

            <div class="col">
                <div class="card-header">
                    Total de Factores
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Factores</th>
                            <th scope="col">Suma</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Factor 01</td>
                            <td> {{$factor1}}</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Factor 02</td>
                            <td>{{$factor2}}</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Factor 03</td>
                            <td>{{$factor3}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Factor 04</td>
                            <td>{{$factor4}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Factor 05</td>
                            <td>{{$factor5}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Factor 06</td>
                            <td>{{$factor6}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Factor 07</td>
                            <td>{{$factor7}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Factor 08</td>
                            <td>{{$factor8}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Factor 09</td>
                            <td>{{$factor9}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Factor 10</td>
                            <td>{{$factor10}}</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Factor 11</td>
                            <td>{{$factor11}}</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>


                <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$categorias}}">
                </p>

                <h4>DIMENSION 01</h4>
                <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$dimension01}}">
                </p>
                <h4>DIMENSION 02</h4>
                <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$dimension02}}">
                </p>
                <h4>DIMENSION 03</h4>
                <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$dimension03}}">
                </p>
                <h4>DIMENSION 04</h4>
                <p><input disabled="disabled" class="form-control" type="text" name="fecha" value="{{$dimension04}}">
                </p>



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
        $('#estandartotal').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#estandartotal').DataTable({
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