<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

$reused_route_name = '/customers/{customer}';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get($reused_route_name, [CustomerController::class, 'show']);
Route::get($reused_route_name . '/edit', [CustomerController::class, 'edit']);
Route::patch($reused_route_name, [CustomerController::class, 'update']);
Route::delete($reused_route_name, [CustomerController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
