<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateProducts;
use App\Http\Controllers\ShowProducts;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteProducts;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/produtos', [CreateProducts::class, 'create']);

Route::get('/produtos', [ShowProducts::class, 'show']);
Route::get('/produtos/{id}', [ShowProducts::class, 'show_id']);

Route::put('/produtos/{id}', [UpdateController::class, 'update']);

Route::delete('/produtos/{id}', [DeleteProducts::class, 'delete']);
