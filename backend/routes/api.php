<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcamController;
                        
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();
});*/

/*Clase Route: Encarga de rutas
metodo apiResource:: Crear rutas de cambio de un estado 
                     para una identidad*/
Route::apiResource('bootcamps',  BootcamController::class);