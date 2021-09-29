<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/usuarios/{contrasena}', [UsuarioController::class,'show']);

Route::get('/usuarios', [UsuarioController::class,'index']);

Route::get('/usuarios/{usuario}', [UsuarioController::class,'show']);
Route::post('usuarios', [UsuarioController::class,'store']);
Route::put('/usuarios/{usuario}', [UsuarioController::class,'update']);
Route::delete('/usuarios/{usuario}', [UsuarioController::class,'delete']);




/*
https://github.com/diegosistem09/Prueba_usuario_roles
*/