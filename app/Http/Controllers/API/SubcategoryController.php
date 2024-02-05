<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategory = Subcategory::all();
        return response()->json($subcategory);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory = new Subcategory();
        $subcategory->fill($request->all())->save();
        return response()->json($subcategory);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory){
            return response()->json($subcategory);
        }
        return response()->json(['message' => 'Subcategory not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subcategory=Subcategory::find($id);
        if($subcategory){
            $subcategory->update($request->all());
            return response()->json(['message' => 'Subcategory updated successfully']);
        }
        return response()->json(['message' => 'Subcategory not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subcategory=Subcategory::find(id);
        if($subcategory){
            $subcategory->delete();
            return response()->json(['message' => 'Subcategory deleted successfully']);
        }
        return response()->json(['message' => 'Subcategory not found'], 404);
    }

    function getByCode($code){
        $subcategory = Subcategory::where('code_subcategory', $code)->first();
        if($subcategory){
            return response()->json($subcategory);
        }
        return response()->json(['message' => 'Subcategory not found'], 404);
    }
}
