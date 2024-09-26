<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
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
        return Asignatura::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asignatura = Asignatura::create($request->all());
        return response()->json($asignatura,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Asignatura::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->update($request->all());
        return response()->json($asignatura,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Asignatura::destroy($id);
        return response()->json(null,204);
    }
}
