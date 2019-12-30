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
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card-header">
                    Total de estandares
                </div>
                <div class="table-responsive m-t-10">
                    <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
                        width="100%" id="estandartotal" align="center">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Estanadar</th>
                                <th scope="col">Calificacion</th>
                                {{-- <th>Fecha</th> --}}
                                {{-- <th>Acciones</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estandarprograma as $item )
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>Estandar: {{$item->estandar_id}} </td>
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
            </div>
            <div class="col">
                <div class="card-header">
                    Total de Factores
                </div>
                <table class="table table-striped table-bordered" id="factores" width="100%">
                    <thead class="thead-darck" background-color: #f00>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Factores</th>
                            <th scope="col">Calificacion</th>
                            {{-- <th scope="col">Acciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Factor 01</td>
                            <td> {{$factor1}}</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Factor 02</td>
                            <td>{{$factor2}}</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Factor 03</td>
                            <td>{{$factor3}}</td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Factor 04</td>
                            <td>{{$factor4}}</td>

                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Factor 05</td>
                            <td>{{$factor5}}</td>

                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Factor 06</td>
                            <td>{{$factor6}}</td>

                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Factor 07</td>
                            <td>{{$factor7}}</td>

                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Factor 08</td>
                            <td>{{$factor8}}</td>

                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Factor 09</td>
                            <td>{{$factor9}}</td>

                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Factor 10</td>
                            <td>{{$factor10}}</td>

                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Factor 11</td>
                            <td>{{$factor11}}</td>

                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Factor 12</td>
                            <td>{{$factor12}}</td>

                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Dimension 01</td>
                            <td>{{$dimension01}}</td>

                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>Dimension 02</td>
                            <td>{{$dimension02}}</td>

                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>Dimension 03</td>
                            <td>{{$dimension03}}</td>

                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>Dimension 04</td>
                            <td>{{$dimension04}}</td>

                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>Total Estandar</td>
                            <td>{{$categorias}}</td>

                        </tr>
                    </tbody>
                </table>
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
                $('#factores').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#factores').DataTable({
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