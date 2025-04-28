<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AlergiaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class AlergiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $alergias = Alergia::paginate();

        return view('alergia.index', compact('alergias'))
            ->with('i', ($request->input('page', 1) - 1) * $alergias->perPage());
        /*$alergias = Alergia::all();
        $i = 0; // Inicializar $i para la vista
        return view('alergia.index', compact('alergias', 'i'));*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $alergia = new Alergia();

        return view('alergia.create', compact('alergia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlergiaRequest $request): RedirectResponse
    {
        Alergia::create($request->validated());

        return Redirect::route('alergias.index')
            ->with('success', 'Alergia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $alergia = Alergia::find($id);

        return view('alergia.show', compact('alergia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $alergia = Alergia::find($id);

        return view('alergia.edit', compact('alergia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlergiaRequest $request, Alergia $alergia): RedirectResponse
    {
        $alergia->update($request->validated());

        return Redirect::route('alergias.index')
            ->with('success', 'Alergia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Alergia::find($id)->delete();

        return Redirect::route('alergias.index')
            ->with('success', 'Alergia deleted successfully');
    }
}
