<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\CarPartController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\PartController;
use App\Http\Controllers\API\ProformaController;
use App\Http\Controllers\API\ProvinceController;
use App\Http\Controllers\API\SubcategoryController;
use App\Http\Controllers\API\ZoneController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('car', CarController::class);
Route::get('/car/code/{code}', [CarController::class, 'getByCode']);

Route::resource('car-part', CarPartController::class);
Route::get('/car-part/code/{code}', [CarPartController::class, 'getByCode']);

Route::resource('city', CityController::class);
Route::get('/city/code/{code}', [CityController::class, 'getByCode']);

Route::resource('part', PartController::class);
Route::get('/part/code/{code}', [PartController::class, 'getByCode']);

Route::resource('proforma', ProformaController::class);

Route::resource('province', ProvinceController::class);
Route::get('/province/code/{code}', [ProvinceController::class, 'getByCode']);

Route::resource('subcategory', SubcategoryController::class);
Route::get('/subcategory/code/{code}', [SubcategoryController::class, 'getByCode']);

Route::resource('zone', ZoneController::class);
Route::get('/zone/code/{code}', [ZoneController::class, 'getByCode']);