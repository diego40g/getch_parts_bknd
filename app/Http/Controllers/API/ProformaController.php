<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Proforma;
use Illuminate\Http\Request;

class ProformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proforma = Proforma::all();
        return response()->json($proforma);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proforma = new Proforma();
        $proforma->fill($request->all())->save();
        return response()->json($proforma);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proforma = Proforma::find($id);
        if($proforma){
            return response()->json($proforma);
        }
        return response()->json(['message' => 'Proforma not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proforma=Proforma::find($id);
        if($proforma){
            $proforma->update($request->all());
            return response()->json(['message' => 'Proforma updated successfully']);
        }
        return response()->json(['message' => 'Proforma not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proforma=Proforma::find(id);
        if($proforma){
            $proforma->delete();
            return response()->json(['message' => 'Proforma deleted successfully']);
        }
        return response()->json(['message' => 'Proforma not found'], 404);
    }
}
