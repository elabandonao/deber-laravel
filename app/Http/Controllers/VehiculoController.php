<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();

        return view('vehiculo.index')->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = new Vehiculo();

        $vehiculos->placa = $request->get('placa');
        $vehiculos->color = $request->get('color');
        $vehiculos->transmision = $request->get('transmision');
        $vehiculos->modelo = $request->get('modelo');
        $vehiculos->marca = $request->get('marca');
        $vehiculos->latitud = $request->get('latitud');
        $vehiculos->longitud = $request->get('longitud');
        $vehiculos->estado = $request->get('estado');

        $vehiculos->save();

        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.show')->with('vehiculo', $vehiculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.edit')->with('vehiculo', $vehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);

        $vehiculo->placa = $request->get('placa');
        $vehiculo->color = $request->get('color');
        $vehiculo->transmision = $request->get('transmision');
        $vehiculo->modelo = $request->get('modelo');
        $vehiculo->marca = $request->get('marca');
        $vehiculo->latitud = $request->get('latitud');
        $vehiculo->longitud = $request->get('longitud');
        $vehiculo->estado = $request->get('estado');

        $vehiculo->save();

        return redirect('/vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('/vehiculos');
    }
}
