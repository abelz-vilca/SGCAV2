@extends('layouts.plantilla')

@section('name')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                DATOS GENERALES
            </div>
            <div class="card-body" style="background-color: #BDD7D6;">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">INSTITUCIÓN</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                        placeholder="UNIVERSIDAD NACIONAL DE SAN CRISTOBAL DE HUAMANGA">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">OFICINA</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        placeholder="Oficina General de Calidad y Acreditación">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">FECHA</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                        value="<?php echo date("d/m/Y"); ?>" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">JEFE DE LA OFICINA</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                        placeholder="Dra. Luisa Alcarraz Curi">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">CONTACTO</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                        placeholder="066-403240">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">REPORTE</label>
                                    <input disabled="disabled" type="email" class="form-control" id="inputEmail4"
                                        placeholder="Quinto Reporte">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <input type="submit" class="btn btn-success" value="Guardar"> --}}

                </form>

            </div>
            <hr>
            <a class="btn waves-effect waves-light btn-rounded btn-info" href="programas">CALIFICAR PROGRAMAS</a>

            <hr>
            <a class="btn waves-effect waves-light btn-rounded btn-warning" href="actualizardatos">Actualizar Datos
                Miembros</a>

            <h3 class="text center-block"> Estimados Docentes debe actualizar los datos de los miembros de comités de
                autoevaluación</h3>
        </div>

    </div>
</div>

@endsection