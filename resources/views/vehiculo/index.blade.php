@extends('layouts.plantillabase')

@section('contenido')
    <a href='vehiculos/create' class="btn btn-primary" style="margin-bottom: 1rem;">Añadir Vehiculo a registro</a>
    <br>
    <div>
        <input id="longitud" name="longitud" type="text" class="form-control" tabindex="7">
        <a href="vehiculos/show" class="btn btn-secondary">Buscar Vehiculo por ID</a>
    </div>
    <br>
    <div>
        <a href="vehiculos/show" class="btn btn-secondary">Buscar Vehiculo por placa</a>
    </div>
    <table class="table table-light table-striped mt-4">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Placa</th>
            <th scope="col">Color</th>
            <th scope="col">Transmision</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Latitud</th>
            <th scope="col">Longitud</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->id }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->color }}</td>
                    <td>{{ $vehiculo->transmision }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->latituda }}</td>
                    <td>{{ $vehiculo->longitud }}</td>
                    <td>{{ $vehiculo->estado }}</td>
                    <td>
                        <form action="{{ route ('vehiculos.destroy',$vehiculo->id) }}" method="POST">
                            <a href="/vehiculos/{{ $vehiculo->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection