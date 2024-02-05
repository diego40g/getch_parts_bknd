<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city = City::all();
        return response()->json($city);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = new City();
        $city->fill($request->all())->save();
        return response()->json($city);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $city = City::find($id);
        if($city){
            return response()->json($city);
        }
        return response()->json(['message' => 'City not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $city=City::find($id);
        if($city){
            $city->update($request->all());
            return response()->json(['message' => 'City updated successfully']);
        }
        return response()->json(['message' => 'City not found'], 404);
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $city=City::find(id);
        if($city){
            $city->delete();
            return response()->json(['message' => 'City deleted successfully']);
        }
        return response()->json(['message' => 'City not found'], 404);
    }

    public function getByCode($code){
        $city = City::where('code_city', $code)->first();
        if($city){
            return response()->json($city);
        }
        return response()->json(['message' => 'City not found'], 404);
    }
}
