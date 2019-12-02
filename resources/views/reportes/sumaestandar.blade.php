@extends('layouts.plantilla')
@section('name')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Estandar</th>
            <th scope="col">Calificación</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>estandar 01</td>
            <td>
                <?php echo $e1 ?>
            </td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>estandar 02</td>
            <td> <?php echo $e01 ?></td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>estandar 03</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>



@endsection