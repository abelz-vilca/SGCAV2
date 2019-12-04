@extends('layouts.plantilla')

@section('name')
<div align="center">
<a href="http://www.unitag.io/qreator/generate?setting=%7B%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Simple%22%7D%2C%22E%22%3A%22H%22%2C%22BODY_TYPE%22%3A0%2C%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22800040%22%7D%2C%22LOGO%22%3A%7B%22L_NAME%22%3A%22https%3A%2F%2Fstatic-unitag.com%2Ffile%2Ffreeqr%2F260ceb9bfd744f7a189d60d32fb404ea.png%22%2C%22EXCAVATE%22%3Atrue%7D%7D&data=%7B%22TYPE%22%3A%22url%22%2C%22DATA%22%3A%7B%22URL%22%3A%22AGUIRRE+ANDRADE%2C+MANGLIO%22%7D%7D ">
<img src="http://www.unitag.io/qreator/generate?setting=%7B%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Simple%22%7D%2C%22E%22%3A%22H%22%2C%22BODY_TYPE%22%3A0%2C%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22800040%22%7D%2C%22LOGO%22%3A%7B%22L_NAME%22%3A%22https%3A%2F%2Fstatic-unitag.com%2Ffile%2Ffreeqr%2F260ceb9bfd744f7a189d60d32fb404ea.png%22%2C%22EXCAVATE%22%3Atrue%7D%7D&data=%7B%22TYPE%22%3A%22url%22%2C%22DATA%22%3A%7B%22URL%22%3A%22AGUIRRE+ANDRADE%2C+MANGLIO%22%7D%7D" alt="QR Code - AGUIRRE ANDRADE, MANGLIO"></a>
</div>
<div class="card">
        <div class="card-header" style="background-color: red;">
                Certificados
              </div>
        <div class="card">
            <div class="card-body" style="background-color: light;">
                <div class="table-responsive m-t-10">
                <table class="display nowrap table table-hover table-striped table-bordered" id="certificado" style="width:100%">
                    <thead>
                        <tr align="center" class="bg-info">
                            <th >N°</th>
                            <th >Usuario</th>
                            <th >Codigo de certificado</th>

                            <th scope="col">Fecha</th>
                            <th>ver QR</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($certificado as $item )
                        <tr class="table-info">
                            <th >{{$item->id}}</th>
                            <td > {{$item->nombres}}</td>
                            <td >{{$item->idcertificado}}</td>
<td>04/12/2019</td>
<td><a href="">
    <button  type="button" class="btn waves-effect waves-light btn-rounded btn-outline-info">VER QR</button></a></td>
                            
                        </tr>
                        @endforeach()

                    </tbody>

                </table>
            </div>
        </div></div>
</div>


<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Editable -->
<script src="{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
<script src="{{asset('assets/plugins/tiny-editable/numeric-input-example.js')}}"></script>
<script>
    $('#certificado').editableTableWidget().numericInputExample().find('td:first').focus();
                $(document).ready(function() {
                    $('#certificado').DataTable({
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