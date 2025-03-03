<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        return view('empleados.index', compact('empleados', 'oficina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|unique:empleados,dni',
            'email' => 'required|email|unique:empleados,email',
        ]);

        $oficina->empleados()->create($request->all());

        return redirect()->route('empleados.index', $oficina);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|unique:empleados,dni,' . $empleado->id,
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index', $empleado->oficina);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
