<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $province = Province::all();
        return response()->json($province);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $province = new Province();
        $province->fill($request->all())->save();
        return response()->json($province);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $province = Province::find($id);
        if($province){
            return response()->json($province);
        }
        return response()->json(['message' => 'Province not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $province=Province::find($id);
        if($province){
            $province->update($request->all());
            return response()->json(['message' => 'Province updated successfully']);
        }
        return response()->json(['message' => 'Province not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $province=Province::find(id);
        if($province){
            $province->delete();
            return response()->json(['message' => 'Province deleted successfully']);
        }
        return response()->json(['message' => 'Province not found'], 404);
    }

    public function getByCode($code){
        $province = Province::where('code_province', $code)->first();
        if($province){
            return response()->json($province);
        }
        return response()->json(['message' => 'Province not found'], 404);
    }
}
