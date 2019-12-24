@extends('layouts.plantilla')

@section('name')
<div class="container-fluid" class="container-my-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header" style="background-color: #9C9C9C">
                Anexos del Estándar
            </div>
            <div class="card">
                <div class="card-body" style="background-color: #f6f6f6">
                    @if (session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}
                    </div>
                    @endif
                    <form method="POST" action="{{route('subir.anexo')}}" enctype="multipart/form-data">
                        <div class="form-body">
                            {{-- @method('PUT') --}}
                            @csrf
                            @error('archivoae')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                no ha subido ningun anexo
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @enderror @if ($errors->has('Descripcion'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Describa el anexo
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group has-success">
                                        <label>Programa de Estudio</label>
                                        <input disabled="false" type="text has-success" class="form-control"
                                            value="<?php if($estandarid->programa_id==1){
                                                echo "INGENIERÍA AGRONOMÍA";} elseif ($estandarid->programa_id==2) {
                  echo "INGENIERÍA AGRÍCOLA";
                } elseif ($estandarid->programa_id==3) {
                  echo " INGENIERÍA AGROFORESTAL";
                } elseif ($estandarid->programa_id==4) {
                  echo " MEDICINA VETERINARIA";
                }elseif ($estandarid->programa_id==5) {
                  echo " ESCUELA PROFESIONAL DE BIOLOGÍA";
                } elseif ($estandarid->programa_id==6) {
                  echo " EDUCACIÓN INICIAL";
                } elseif ($estandarid->programa_id==7) {
                  echo " EDUCACIÓN PRIMARIA";
                }elseif ($estandarid->programa_id==8) {
                  echo " EDUCACIÓN SECUNDARIA-Ingles y Lengua Española";
                } elseif ($estandarid->programa_id==9) {
                  echo " EDUCACIÓN SECUNDARIA-Matemática Física e Informática";
                } elseif ($estandarid->programa_id==10) {
                  echo " EDUCACIÓN SECUNDARIA-Ciencias Sociales y Filosofia con mencion en Turismo";
                }elseif ($estandarid->programa_id==11) {
                  echo " EDUCACIÓN SECUNDARIA-Lengua Española y Literatura con mencion en comunicación";
                } elseif ($estandarid->programa_id==12) {
                  echo " EDUCACIÓN FÍSICA";
                } elseif ($estandarid->programa_id==13) {
                  echo " ADMINISTRACIÓN DE EMPRESAS";
                } elseif ($estandarid->programa_id==14) {
                  echo " CONTABILIDAD Y AUDITORÍA";
                }elseif ($estandarid->programa_id==15) {
                  echo " ECONOMÍA";
                } elseif ($estandarid->programa_id==16) {
                  echo " CIENCIAS DE LA COMUNICACIÓN";
                } elseif ($estandarid->programa_id==17) {
                  echo " CIENCIAS DE ARQUEOLOGÍA E HISTORIA";
                }elseif ($estandarid->programa_id==18) {
                  echo " CIENCIAS DE ANTROPOLOGÍA SOCIAL";
                } elseif ($estandarid->programa_id==19) {
                  echo "  CIENCIAS DE TRABAJO SOCIAL";
                } elseif ($estandarid->programa_id==20) {
                  echo "  DERECHO";
                }elseif ($estandarid->programa_id==21) {
                  echo "  INGENIERÍA CIVIL";
                } elseif ($estandarid->programa_id==22) {
                  echo "  INGENIERÍA DE MINAS";
                } elseif ($estandarid->programa_id==23) {
                  echo "  INGENIERÍA DE SISTEMAS";
                } elseif ($estandarid->programa_id==24) {
                  echo "  CIENCIAS FÍSICO MATEMÁTICAS-Estadistica";
                }elseif ($estandarid->programa_id==25) {
                  echo " CIENCIAS FÍSICO MATEMÁTICAS-Matemática";
                } elseif ($estandarid->programa_id==26) {
                  echo "  CIENCIAS FÍSICO MATEMÁTICAS-Física";
                } elseif ($estandarid->programa_id==27) {
                  echo " INGENIERÍA QUÍMICA";
                }  elseif ($estandarid->programa_id==28) {
                  echo " INGENIERÍA EN INDUSTRIAS ALIMENTARIASL";
                }elseif ($estandarid->programa_id==29) {
                  echo "  INGENIERÍA AGROINDUSTRIAL";
                } elseif ($estandarid->programa_id==30) {
                  echo " MEDICINA HUMANA";
                } elseif ($estandarid->programa_id==31) {
                  echo " FARMACIA Y BIOQUÍMICA";
                }elseif ($estandarid->programa_id==32) {
                  echo " OBSTETRICIA";
                } elseif ($estandarid->programa_id==33) {
                  echo "ENFERMERÍA";
                }else {
                 echo "otro programa";
                }?>" placeholder="programa">

                                          
            
                                          
                                </div>
                                </div>
                                
                                <div class="col-md-5">
                                    <div class="form-group has-success">
                                        <label>Director(a) (Usuario logueado)</label>

                                        <input disabled="false" type="text has-success" class="form-control"
                                            value="<?php echo  (auth()->user()->name); ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="row" style="background-color: #dddddd">
                                <div class="col-md-6" style="background-color: #c3c3c3">
                                    <div class="form-group has-success">
                                        <label for="archivo">Seleccione el Documento</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <input type="file" class="form-control-file has-success" name="archivoae"
                                                    id="archivo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group has-success">
                                        <label for="fecha">Descripción del Anexo</label>
                                    <input type="text has-success" name="Descripcion" class="form-control"
                                        placeholder="Anexo 1.01" />
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="fecha">Seleccione Reporte</label>
                                        <input textarea class="form-control" name="Descripcion"
                                            placeholder="Quinto Reporte"></textarea>
                                    </div> --}}
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group has-danger">
                                        <label for="fecha">Id</label>
                                        <input type="text has-danger" class="form-control" name="anexoep_id"
                                            value="<?php echo($estandarid->id); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input style='width:150px; height:50px' type="submit" class="btn btn-success" value="Guardar">
                        <a style='width:150px; height:50px' align="center" type="button" class="btn btn-warning "
                        href="{{route('estandar_programaid',$estandarid->programa_id)}}">
                        <img src="{{asset('imagenes/regresar.png')}}" width="40" height="35">
                        Regresar
                    </a>
                      </form>

                </div>

            </div>
        </div>
    </div>
    <div class="card-header">
        Reporte de los Anexos 
    </div>
    <table class="display nowrap table table-hover table-striped table-bordered" id="estandar_detalle">
        <thead class="table table-striped">
            <tr class="bg-info">
                <th scope="col">N°</th>
                <th scope="col">Documento</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha de Cambio</th>
                {{-- <th scope="col">programaID</th> --}}
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($estandarprograma as $item ) --}}
            @foreach ($programa as $item)
            <tr disabled="disabled" class="table-light">
                <th scope="row">{{$item->id}}</th>
                <td><a href="{{Storage::url($item->archivoae)}}" target="_blank">
                        {{-- <img border="0" src="{{asset('iconos/pdficon.png')}}" width="40" height="40"> --}}
                        verificar Anexo</a>
                </td>
                <td>{{$item->Descripcion}}</td>
                <td>{{$item->fecha}}</td>
                {{-- <td> {{$item->programa_id}}</td> --}}
                <td>
                    {{-- https://docs.google.com/viewer?url=http --}}
                    <a href="{{Storage::url($item->archivoae)}}" target="_blank"><img border="0"
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