<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zone = Zone::all();
        return response()->json($zone);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zone = new Zone();
        $zone->fill($request->all())->save();
        return response()->json($zone);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $zone = Zone::find($id);
        if($zone){
            return response()->json($zone);
        }
        return response()->json(['message' => 'Zone not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $zone=Zone::find($id);
        if($zone){
            $zone->update($request->all());
            return response()->json(['message' => 'Zone updated successfully']);
        }
        return response()->json(['message' => 'Zone not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $zone=Zone::find(id);
        if($zone){
            $zone->delete();
            return response()->json(['message' => 'Zone deleted successfully']);
        }
        return response()->json(['message' => 'Zone not found'], 404);
    }

    function getByCode($code){
        $zone = Zone::where('code', $code)->first();
        if($zone){
            return response()->json($zone);
        }
        return response()->json(['message' => 'Zone not found'], 404);
    }
}
