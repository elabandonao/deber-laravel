@extends('layouts.plantillabase')

@section('contenido')
    <h2>CREAR REGISTRO</h2>

    <form action="/vehiculos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input id="placa" name="placa" type="text" class="form-control" tabindex="1">
        </div>       
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input id="color" name="color" type="text" class="form-control" tabindex="2">
        </div> 
        <div class="mb-3">
            <label for="transmision" class="form-label">Transmision</label>
            <input id="transmision" name="transmision" type="text" class="form-control" tabindex="3">
        </div> 
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input id="modelo" name="modelo" type="text" class="form-control" tabindex="4">
        </div> 
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input id="marca" name="marca" type="text" class="form-control" tabindex="5">
        </div> 
        <div class="mb-3">
            <label for="latitud" class="form-label">Latitud</label>
            <input id="latitud" name="latitud" type="text" class="form-control" tabindex="6">
        </div> 
        <div class="mb-3">
            <label for="codigo" class="form-label">Longitud</label>
            <input id="longitud" name="longitud" type="text" class="form-control" tabindex="7">
        </div> 
        <div class="mb-3">
            <label for="codigo" class="form-label">Estado</label>
            <input id="estado" name="estado" type="text" class="form-control" tabindex="8">
        </div> 
        <a href="/vehiculos" class="btn btn-secondary" tabindex="9">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
    </form>
@endsection