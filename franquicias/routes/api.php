<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProductoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('tiendas', TiendaController::class);
Route::get('productos', [ProductoController::class,'indexAll']);
Route::apiResource('tienda.productos', ProductoController::class);
//Route::apiResource('productos', ProductoController::class)->only(['store', 'update','destroy']);
