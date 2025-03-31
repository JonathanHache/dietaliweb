<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $persona = Persona::all();
        return response()->json($persona);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $persona = Persona::create([
            'nombre' => $request->input('nombre'),
            'apellido_p' => $request->input('apellido_p'),
            'apellido_m' => $request->input('apellido_m'),
            'sexo' => $request->input('sexo'),
            'curp' => $request->input('curp'),
            'correo' => $request->input('correo'),
            'contrasena' => $request->input('contrasena'),
        ]);
        return response()->json($persona, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
