<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all(); //Obtener todos los datos de una consulta en BD
          return view('pacientes.index')
          ->with('pacientes', $pacientes); //Retornar los datos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente([
            'tipoDocumento' => $request->get('tipoDocumento'),
            'documento' => $request->get('documento'),
            'nombres' => $request->get('nombres'),
            'apellidos' => $request->get('apellidos'),
            'fechaNacimiento' => $request->get('fechaNacimiento'),
            'genero' => $request->get('genero'),
            'estadoCivil' => $request->get('estadoCivil'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono')
        ]);

        $paciente->save(); //Guarda en la tabla en la base de datos
        return redirect('/pacientes')->with('success' , 'El registro del paciente ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id); //Consultar con un id por Eloquent
        return view('pacientes.editar', compact('paciente'));
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
        $paciente = Paciente::findOrFail($id); //Consultar el registro a editar

        //Actualizar los datos en el modelo
        $paciente->tipoDocumento = $request->tipoDocumento;
        $paciente->documento = $request->documento;
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->fechaNacimiento = $request->fechaNacimiento;
        $paciente->genero = $request->genero;
        $paciente->estadoCivil = $request->estadoCivil;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;

        //Actualizar en la base de datos
        $paciente->update();

        //Redirigir hacie el método index del controlador
        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect('/pacientes');
    }
}
