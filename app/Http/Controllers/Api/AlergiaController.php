<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alergia;
use Illuminate\Http\Request;

class AlergiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alergia = Alergia::all();
        return response()->json($alergia);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $alergia = Alergia::create([
            'descripcion' => $request->input('descripcion'),
        ]);
        return response()->json($alergia, 201);
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
