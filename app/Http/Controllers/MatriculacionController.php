<?php

namespace App\Http\Controllers;

use App\Models\Matriculacion;
use Illuminate\Http\Request;

class MatriculacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'role:admin']);
    }
    public function index()
    {
        return Matriculacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matriculacion = Matriculacion::create($request->all());   
        return response()->json($matriculacion,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Matriculacion::findOrFail($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matriculacion = Matriculacion::findOrFail($id);
        $matriculacion->update($request->all());
        return response()->json($matriculacion,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matriculacion::destroy($id);
        return response()->json(null, 204);
    }
}
