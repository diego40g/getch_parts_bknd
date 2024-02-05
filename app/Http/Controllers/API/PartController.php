<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $part = Part::all();
        return response()->json($part);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $part = new Part();
        $part->fill($request->all())->save();
        return response()->json($part);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $part = Part::find($id);
        if($part){
            return response()->json($part);
        }
        return response()->json(['message' => 'Part not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $part=Part::find($id);
        if($part){
            $part->update($request->all());
            return response()->json(['message' => 'Part updated successfully']);
        }
        return response()->json(['message' => 'Part not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $part=Part::find(id);
        if($part){
            $part->delete();
            return response()->json(['message' => 'Part deleted successfully']);
        }
        return response()->json(['message' => 'Part not found'], 404);
    }

    public function getByCode($code){
        $part = Part::where('code_part', $code)->first();
        if($part){
            return response()->json($part);
        }
        return response()->json(['message' => 'Part not found'], 404);
    }
}
