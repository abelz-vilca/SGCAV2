@extends('layouts.plantilla')

@section('name')

<head>
    <title>EDITAR XD</title>
</head>


<header>

    <!-- Image and text -->

</header>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div align="center">
                <a align="center" type="button" class="btn btn-dark btn-block"
                    href="{{route('estandar_programaid',$devolverisprograma->programa_id)}}">
                    <img src="{{asset('imagenes/regresar.png')}}" width="40" height="40">
                    REGRESAR A VERIFICAR EL DOCUMENTO Y CALIFICACION
                </a>
            </div>
            <div class="card-body" style="background-color: #BDD7D6;">

                @if (session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}
                </div>
                @endif
                <form method="POST" action="{{ route('estandar_programa.update', $devolverisprograma->id )}}"
                    enctype="multipart/form-data">
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
                                    <label for="basic-url">SELECIONE EL DOCUMENTO</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <input type="file" class="form-control-file" name="archivo" id="archivo">
                                        </div>
                                        {{-- <input type="text" name="link" class="form-control" value="{{old('link')}}">
                                        --}}
                                        {{-- <input type="text" name="link" class="form-control"
                                            value=""> --}}

                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="calificacion">Seleccione la Calificación del Estándar</label>
                                    <a href="#" class="btn btn-warning pull-right" data-toggle="modal"
                                        data-target="#myModal"><img src="{{asset('imagenes/ver.png')}}" width="25"
                                            height="20" class="d-inline-block align-top" alt="">
                                        Ver Tabla de Calificación</a>
                                    <div class="controls">
                                        <select name="calificacion" id="calificacion" required class="form-control">
                                            {{-- <select name="calificacion" required class="form-control"> --}}
                                            <option value="">
                                                Seleccione su Calificación</option>
                                            <option value="1">1</option>
                                            </option>
                                            <option value="2">2</option>
                                            <option value="3">4</option>
                                            <option value="4">3</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="fecha">DESCRIPCION</label>
                                    <input type="text" name="descripcion" class="form-control"
                                        placeholder="Anote la Descripción del Estándar" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="fecha">Fecha de calificación</label>
                                    <input disabled="disabled" type="text" name="fecha" class="form-control"
                                        value="<?php echo date("d/m/Y"); ?>" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="estandar_id">Estandar</label>
                                    <input disabled="disabled" type="text" class="form-control"
                                        value=" ESTÁNDAR Nro : <?php echo($devolverisprograma->estandar_id); ?>">

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="estandar_id">Estandar</label>
                                    <input disabled="disabled" type="text" class="form-control"
                                        value="programa ID : <?php echo($devolverisprograma->programa_id); ?>">

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

{{-- <div align="center"> --}}

{{-- {{route('estandar_programaid')}} --}}
{{-- {{route('estandar_programaid',$devolverisprograma->programa_id)}} --}}
{{-- <a align="center" class="navbar-brand" href="{{route('estandar_programaid',$devolverisprograma->programa_id)}}">
<img src="{{asset('imagenes/regresar.png')}}" width="40" height="40" class="d-inline-block align-top" alt="">
REGRESAR A VERIFICAR EL DOCUMENTO Y CALIFICACION
</a>
</div> --}}
@endsection