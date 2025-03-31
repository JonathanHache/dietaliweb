<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grupo = Grupo::all();
        return response()->json($grupo);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $grupo = Grupo::create([
            'descripcion' => $request->input('descripcion'),
        ]);
        return response()->json($grupo, 201);
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
