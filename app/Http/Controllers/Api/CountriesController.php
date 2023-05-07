<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $countries = Country::all();
            return response()->json($countries,200);
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
            $country = Country::create($request->all());
            return response()->json($country,201);
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
            $countries = Country::find($id);
            return response()->json($countries,200);
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
            $country = Country::find($id)->update($request->all());
            return response()->json($country,200);
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
            $countries = Country::find($id)->delete();
            return response()->json([
                'message' => 'El pais se ha eliminado con Exito'
            ],202);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ],400);
        }
    }
}
