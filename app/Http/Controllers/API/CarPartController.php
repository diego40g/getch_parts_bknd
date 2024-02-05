<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CarPart;
use Illuminate\Http\Request;

class CarPartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carPart = CarPart::all();
        return response()->json($carPart);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carPart = new CarPart();
        $carPart->fill($request->all())->save();
        return response()->json($carPart);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $carPart = CarPart::find($id);
        if($carPart){
            return response()->json($carPart);
        }
        return response()->json(['message' => 'Car part not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carPart=CarPart::find($id);
        if($carPart){
            $carPart->update($request->all());
            return response()->json(['message' => 'Car part updated successfully']);
        }
        return response()->json(['message' => 'Car part not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carPart=CarPart::find(id);
        if($carPart){
            $carPart->delete();
            return response()->json(['message' => 'Car part deleted successfully']);
        }
        return response()->json(['message' => 'Car part not found'], 404);
    }

    public function getByCode($code){
        $carPart = CarPart::where('code_part', $code)->first();
        if($carPart){
            return response()->json($carPart);
        }
        return response()->json(['message' => 'Car part not found'], 404);
    }
}
