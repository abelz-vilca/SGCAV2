@extends('layouts.plantilla')

@section('name')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
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
            <a class="btn btn-info" href="programas">CALIFICAR PROGRAMAS</a>
            <p></p>
            <a class="btn btn-danger" href="actualizardatos">Actualizar Datos</a>
        </div>

    </div>
</div>

@endsection