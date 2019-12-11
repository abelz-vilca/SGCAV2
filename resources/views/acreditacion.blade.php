@extends('layouts.plantilla')

@section('name')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: orange;">
                DATOS GENERALES
            </div>
            <div class="card-body" style="background-color: #white;">
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

            <h3 align="center" class="text center-block"> Estimados Docentes debe actualizar los datos de los miembros
                de comités de
                autoevaluación</h3>
            <div id="contadorpaginahijo">
                <span style="color:#800040">
                    <marquee>
                        <font size="4">CONTADOR DE VISITAS INICIADO EL 11-12-2019</font>
                    </marquee>
                </span>
                {{-- <a href="http://www.contadorvisitasgratis.com" title="contador de visitas gratis"><img
                        src="http://counter10.01counter.com/private/contadorvisitasgratis.php?c=c268fad432861d7860829e3f66d0ff85"
                        border="0" title="contador de visitas gratis" alt="contador de visitas gratis"></a> --}}
            </div>
            <div>
                <div id="sfcgnecf3bp9cd3wcdnt4n9a7hm5jdhrsxq"></div>
                <script type="text/javascript"
                    src="https://counter6.wheredoyoucomefrom.ovh/private/counter.js?c=gnecf3bp9cd3wcdnt4n9a7hm5jdhrsxq&down=async"
                    async></script>
                <noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas html"><img
                            src="https://counter6.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=gnecf3bp9cd3wcdnt4n9a7hm5jdhrsxq"
                            border="0" title="contador de visitas html" alt="contador de visitas html"></a></noscript>
            </div>
        </div>

    </div>
</div>

@endsection