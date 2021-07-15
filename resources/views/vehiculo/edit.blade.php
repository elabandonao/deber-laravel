@extends('layouts.plantillabase')

@section('contenido')
    <form action="/vehiculos/{{$vehiculo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input id="placa" name="placa" type="text" class="form-control" tabindex="1" value="{{$vehiculo->placa}}">
        </div>       
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input id="color" name="color" type="text" class="form-control" tabindex="2" value="{{ $vehiculo->color }}">
        </div> 
        <div class="mb-3">
            <label for="transmision" class="form-label">Transmision</label>
            <input id="transmision" name="transmision" type="text" class="form-control" tabindex="3" value="{{ $vehiculo->transmision }}">
        </div> 
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input id="modelo" name="modelo" type="text" class="form-control" tabindex="4" value="{{ $vehiculo->modelo }}">
        </div> 
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input id="marca" name="marca" type="text" class="form-control" tabindex="5" value="{{ $vehiculo->marca }}">
        </div> 
        <div class="mb-3">
            <label for="latitud" class="form-label">Latitud</label>
            <input id="latitud" name="latitud" type="text" class="form-control" tabindex="6" value="{{ $vehiculo->latitud }}">
        </div> 
        <div class="mb-3">
            <label for="longitud" class="form-label">Longitud</label>
            <input id="longitud" name="longitud" type="text" class="form-control" tabindex="7" value="{{ $vehiculo->longitud }}">
        </div> 
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input id="estado" name="estado" type="text" class="form-control" tabindex="8" value="{{ $vehiculo->estado }}">
        </div> 
        <a href="/vehiculos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabinde="4">Guardar</button>
    </form>
@endsection