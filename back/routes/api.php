<?php

use App\Http\Controllers\CheburekiController;
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

Route::get('/get', [CheburekiController::class, 'getAll']);
Route::get('/get/{id}', [CheburekiController::class, 'getAll']);
Route::post('/create', [CheburekiController::class, 'create']);
Route::post('/update/{id}', [CheburekiController::class, 'update']);
Route::post('/delete/{id}', [CheburekiController::class, 'delete']);
