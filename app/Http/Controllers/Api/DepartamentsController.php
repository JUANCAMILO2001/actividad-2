<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departament;
use Illuminate\Http\Request;

class DepartamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $departaments = Departament::all();
            return response()->json($departaments,200);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ],403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $departament = Departament::create($request->all());
            return response()->json($departament,201);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ],400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $departaments = Departament::find($id);
            return response()->json($departaments,200);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ],400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $departament = Departament::find($id)->update($request->all());
            return response()->json($departament,200);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ],400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $departaments = Departament::find($id)->delete();
            return response()->json([
                'message' => 'El departamento se ha eliminado con Exito'
            ],202);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ],400);
        }
    }
}
