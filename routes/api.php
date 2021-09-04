<?php

use App\Http\Controllers\API\PaisController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('paises', [PaisController::class , 'index']);
Route::post('paises', [PaisController::class , 'store']);
Route::get('paises/{paises}', [PaisController::class , 'show']);
Route::put('paises/{id}', [PaisController::class , 'update']);
Route::delete('paises/{paises}', [PaisController::class , 'destroy']);