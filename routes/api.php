<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DesarrolladorasController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('videojuegos/obtener-todos', [VideoJuegoController::class, 'obtenerTodos']);
Route::post('videojuegos/crear', [VideoJuegoController::class, 'store']);
Route::post('videojuegos/actualizar', [VideoJuegoController::class, 'update']);
Route::post('videojuegos/buscar-nombre',[VideoJuegoController::class, 'buscarNombre']);
Route::post('videojuegos/eliminar', [VideoJuegoController::class, 'destroy']);

Route::get('desarrolladora/obtener-todos', [DesarrolladorasController::class, 'obtenerTodos']);
Route::post('desarrolladora/crear', [DesarrolladorasController::class, 'store']);
Route::post('desarrolladora/actualizar', [DesarrolladorasController::class, 'update']);
Route::post('desarrolladora/buscar-nombre',[DesarrolladorasController::class, 'buscarNombre']);
Route::post('desarrolladora/eliminar', [DesarrolladorasController::class, 'destroy']);

Route::get('categorias/obtener-todos', [CategoriasController::class, 'obtenerTodos']);
Route::post('categorias/crear', [CategoriasController::class, 'store']);
Route::post('categorias/actualizar', [CategoriasController::class, 'update']);
Route::post('categorias/buscar-nombre',[CategoriasController::class, 'buscarNombre']);
Route::post('categorias/eliminar', [CategoriasController::class, 'destroy']);

