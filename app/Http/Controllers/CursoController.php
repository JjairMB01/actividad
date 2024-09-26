<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct()
     {
         $this->middleware(['auth:sanctum', 'role:admin|profesor']);
     }
    public function index()
    {
        return Curso::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Curso::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::findOrFail( $id );
        $curso->update($request->all());
        return response()->json($curso, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Curso::destroy( $id );
        return response()->json(null, 204);
    }
}
