<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', [ProductoController::class,'index']);

Route::get('/productos/{producto}', [ProductoController::class,'show']);
Route::post('productos', [ProductoController::class,'store']);
Route::put('/productos/{producto}', [ProductoController::class,'update']);
Route::delete('/productos/{producto}', [ProductoController::class,'delete']);


/*
https://github.com/diegosistem09/Prueba_usuario_roles
*/