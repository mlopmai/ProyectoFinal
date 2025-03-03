<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Empleado;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficinas.index', compact('oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oficinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        Oficina::create($request->all());

        return redirect()->route('oficinas.index')->with('success', 'Oficina creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $oficinas = Oficina::findOrFail($id);
        $empleados = Empleado::where('oficina_id', $id)->get();
        return view('oficinas.show', compact('oficinas', 'empleados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $oficinas = Oficina::findOrFail($id);
        return view('oficinas.edit', compact('oficinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oficina = Oficina::findOrFail($id);
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required'
        ]);
        $oficina->update($request->all());
        return redirect()->route('oficinas.index')->with('success', 'Oficina editada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
