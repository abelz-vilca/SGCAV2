@extends('layouts.plantilla')

@section('name')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div align="center">
                <a align="center" type="button" class="btn btn-dark btn-block" href="">
                    <img src="{{asset('imagenes/regresar.png')}}" width="40" height="40">
                    SUBIR ANEXOS DEL CRITERIO
                </a>
            </div>
            <div class="card-body" style="background-color: #BDD7D6;">
                @if (session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}
                </div>
                @endif
                <form method="POST" action="{{ route('criterio_estadandar.update', $editarcriterio->id )}}"
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
                    @enderror
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="fecha">DESCRIPCION</label>
                                    <textarea class="form-control" rows="7" id="comment"
                                        placeholder="El programa de estudios ha definido claramente el número y las características los miembros de sus grupos de interés, quienes han participado y participan en procesos de consulta para la definición de los propósitos del programa de estudios."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="calificacion">CUMPLIMIENTO</label>
                                    <div class="controls">
                                        <select name="calificacion" id="calificacion" required class="form-control">
                                            <option value="">
                                                Seleccione el Cumplimiento</option>
                                            <option value={{ old('1') }}>SI CUMPLE</option>
                                            </option>
                                            <option value={{ old('0') }}>NO CUMPLE</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="fecha">Fecha de calificación</label>
                                    <input disabled="disabled" type="text" name="fecha" class="form-control"
                                        value="<?php echo date("d/m/Y"); ?>" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Estandar</label>
                                    <input disabled="disabled" type="text" class="form-control"
                                        value=" ESTÁNDAR Nro : <?php echo($editarcriterio->estandar_id); ?>">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="justificacion">JUSTIFICACION</label>
                                    <input textarea class="form-control" rows="5" id="comment" name="justificacion"
                                        placeholder="justificación del Cumplimiento"
                                        value="{{ old('justificacion') }}"></textarea>
                                </div>


                            </div>

                        </div>

                    </div>
                    <input style='width:200px; height:50px' type="submit" class="btn btn-success" value="Guardar">

                </form>
            </div>

        </div>
    </div>
</div>

@endsection