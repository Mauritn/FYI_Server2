<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Makan;
use App\Http\Controllers\MakanController;
use App\Http\Controllers\IdController;

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

Route::get('makan', [MakanController::class, 'index']);
Route::get('idmakan', [IdController::class, 'getId']);
Route::post('makan', [MakanController::class, 'create']);
Route::put('makan', [MakanController::class, 'update']);
Route::delete('makan', [MakanController::class, 'delete']);
