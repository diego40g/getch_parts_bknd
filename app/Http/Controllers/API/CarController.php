<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    public function show($id)
    {
        $car = Car::find($id);
        if($car){
            return response()->json($car);
        }
        return response()->json(['message' => 'Car not found'], 404);
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->fill($request->all())->save();
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if ($car) {
            $car->update($request->all());
            return response()->json(['message' => 'Car updated successfully']);
        }

        return response()->json(['message' => 'Car not found'], 404);
    }

    public function destroy($id)
    {
        $car = Car::find($id);

        if ($car) {
            $car->delete();
            return response()->json(['message' => 'Car deleted successfully']);
        }

        return response()->json(['message' => 'Car not found'], 404);
    }

    public function getByCode($code){
        $car = Car::where('code_car', $code)->first();
        if($car){
            return response()->json($car);
        }
        return response()->json(['message' => 'Car not found'], 404);
    }
}
