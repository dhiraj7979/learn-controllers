<?php

use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('videos', [VideoController::class, 'index']);
Route::get('videos/{video}', [VideoController::class, 'show']);
Route::post('videos', [VideoController::class, 'store']);
Route::put('videos/{video}', [VideoController::class, 'update']);
Route::delete('videos/{video}', [VideoController::class, 'destroy']);
Route::get('videos/{video}/stream', [VideoController::class, 'stream']);

