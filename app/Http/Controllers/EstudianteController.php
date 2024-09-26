<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'role:admin|profesor']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Estudiante::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Estudiante::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());
        return response()->json($estudiante, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Estudiante::destroy($id);
        return response()->json(null, 204);
    }
}
