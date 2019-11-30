@extends('layouts.plantilla')

@section('name')


<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <h4 class="box-title m-t-10">Calificación de Criterios</h4>
            <hr>
            {{-- <div align="center">
                <a align="center" type="button" class="btn btn-dark btn-block"
                    href="{{route('criterio_programaid',$devolverisprograma->programa_id)}}">
            <img src="{{asset('imagenes/regresar.png')}}" width="20" height="20">
            SUBIR ANEXOS DEL CRITERIO
            </a>
        </div> --}}
        <div class="card-body" style="background-color: #9c9c9c;">
            @if (session('mensaje') )
            <div class="alert alert-success">{{ session('mensaje') }}
            </div>
            @endif
            <form method="POST" action="{{ route('criterio_estandar.update', $devolverisprograma->id )}}"
                enctype="multipart/form-data">
                <div class="form-body">
                    @method('PUT')
                    @csrf
                    @error('justificacion')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No ha justificado su cumplimiento
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    {{-- @if ($errors->has('archivo'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No ha seleccionado ningun Archivo
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Programa de Estudio</label>
                                <input disabled="false" type="text" class="form-control"
                                    value="programa ID : <?php echo($devolverisprograma->programa_id); ?>">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Estándar</label>
                                <input disabled="false" type="text" class="form-control"
                                    value="Estandar ID : <?php echo($devolverisprograma->estandar_id); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input disabled="false" type="text" class="form-control"
                                    value="<?php echo date("d/m/Y"); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Director</label>
                                <input disabled="false" type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha">DESCRIPCION</label>
                                <textarea class="form-control" rows="9" id="comment"
                                    placeholder="El programa de estudios ha definido claramente el número y las características los miembros de sus grupos de interés, quienes han participado y participan en procesos de consulta para la definición de los propósitos del programa de estudios."></textarea>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="calificacion">CUMPLIMIENTO</label>
                                <div class="controls">
                                    <select name="calificacion" required class="form-control">
                                        <option value="">--Seleccione--</option>
                                        <option value="1">SI CUMPLE</option>
                                        </option>
                                        <option value="0">NO CUMPLE</option>
                                    </select>
                                    <label for="fecha">Fecha de calificación</label>
                                    <input disabled="disabled" type="text" name="fecha"
                                        value="<?php echo date("d/m/Y"); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="justificacion">JUSTIFICACION</label>
                                <textarea id="justificacion" rows="9" name="justificacion"
                                    placeholder="justificación del Cumplimiento"
                                    value="{{ old('justificacion') }}"></textarea>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="archivo">SELECIONE EL DOCUMENTO</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <input type="file" class="form-control-file" name="archivo" id="archivo">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-actions">
                    <input style='width:200px; height:50px' type="submit" class="btn btn-success" value="Guardar">
                    <a align="center" type="button" class="btn btn-info "
                        href="{{route('criterio_programaid',$devolverisprograma->programa_id)}}">
                        <img src="{{asset('imagenes/regresar.png')}}" width="30" height="30">
                        SUBIR ANEXOS DEL CRITERIO
                    </a>
                </div>
            </form>

        </div>

    </div>
</div>
</div>

@endsection