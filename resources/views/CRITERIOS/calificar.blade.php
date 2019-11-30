@extends('layouts.plantilla')

@section('name')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div align="center">
                <a align="center" type="button" class="btn btn-dark btn-block"
                    href="{{route('criterio_programaid',$devolverisprograma->programa_id)}}">
                    <img src="{{asset('imagenes/regresar.png')}}" width="40" height="40">
                    SUBIR ANEXOS DEL CRITERIO
                </a>
            </div>
            <div class="card-body" style="background-color: #BDD7D6;">
                @if (session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}
                </div>
                @endif
                <form method="POST" action="{{ route('criterio_estandar.update', $devolverisprograma->id )}}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @error('justificacion')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No ha justificado su cumplimiento
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror @if ($errors->has('archivo'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No ha seleccionado ningun Archivo
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha">DESCRIPCION</label>
                                <textarea class="form-control" rows="7" id="comment"
                                    placeholder="El programa de estudios ha definido claramente el número y las características los miembros de sus grupos de interés, quienes han participado y participan en procesos de consulta para la definición de los propósitos del programa de estudios."></textarea>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="calificacion">CUMPLIMIENTO</label>
                                <div class="controls">
                                    <select name="calificacion" id="calificacion" required class="form-control">
                                        <option value="">
                                            --Seleccione--</option>
                                        <option value={{ old('1') }}>SI CUMPLE</option>
                                        </option>
                                        <option value={{ old('0') }}>NO CUMPLE</option>
                                    </select>
                                    <label for="fecha">Fecha de calificación</label>
                                    <input disabled="disabled" type="text" name="fecha" class="form-control"
                                        value="<?php echo date("d/m/Y"); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="justificacion">JUSTIFICACION</label>
                                <textarea class="form-control" id="justificacion" rows="7" name="justificacion"
                                    placeholder="justificación del Cumplimiento"
                                    value="{{ old('justificacion') }}"></textarea>
                            </div>
                            {{-- <div class="form-group col-md-12">
                                <label for="estandar_id">Estandar</label>
                                <input disabled="disabled" type="text" class="form-control"
                                    value=" ESTÁNDAR Nro : <php echo($devolverisprograma->estandar_id); ?>">

                            </div>
                            <div class="form-group col-md-12">
                                <label for="estandar_id">Estandar</label>
                                <input disabled="disabled" type="text" class="form-control"
                                    value="programa ID : <php echo($devolverisprograma->programa_id); ?>">
                            </div> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="basic-url">SELECIONE EL DOCUMENTO</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <input type="file" class="form-control-file" name="archivo" id="archivo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <input style='width:200px; height:50px' type="submit" class="btn btn-success" value="Guardar">

                </form>
            </div>

        </div>
    </div>
</div>

@endsection