<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\InteraccionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/perro')->group(function () {
    Route::post('/create', [PerroController::class, 'createPerro']);
    Route::get('/all', [PerroController::class, 'getAllPerros']);
    Route::delete('/delete', [PerroController::class, 'deletePerro']);
    Route::put('/edit', [PerroController::class, 'editPerro']);
    Route::get('/find/{id}', [PerroController::class, 'findPerro']);
});

Route::prefix('/interaccion')->group(function () {
    Route::post('/create', [InteraccionController::class, 'createInteraccion']);
    Route::get('/all', [InteraccionController::class, 'getAllInteracciones']);
    Route::delete('/delete', [InteraccionController::class, 'deleteInteraccion']);
    Route::put('/edit', [InteraccionController::class, 'editInteraccion']);
    Route::get('/perro', [InteraccionController::class, 'getInterracionPerro']);
});
