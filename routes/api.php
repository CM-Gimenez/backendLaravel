<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});

//CRUD de productos
//Route::apiResource('/productos','\App\Http\Controllers\ProductoController'::class );

//mostrar todos los productos pagiNADOS DE 10EN 10
Route::get('productos',[\App\Http\Controllers\ProductoController::class, 'index']);
//MOSTRAR UN PRODUCTO POR SU ID
Route::get('productos/{id}',[\App\Http\Controllers\ProductoController::class, 'show']);
//BUSCAR PRODUCTOS 
//Borrar producto
Route::delete('productos/{id}',[\App\Http\Controllers\ProductoController::class, 'destroy']);
//Crear un nuevo product
Route::post('productos', [\App\Http\Controllers\ProductoController::class,'store']);
//modificar un producto
Route::put('productos/{id}', [\App\Http\Controllers\ProductoController::class,'update']);


