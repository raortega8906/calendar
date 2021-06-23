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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes record CRUD Api:
// Route::get('/record', [App\Http\Controllers\EventController::class, 'index']);
// Route::post('/record/create', [App\Http\Controllers\EventController::class, 'create']);
// Route::put('/record/{event}', [App\Http\Controllers\EventController::class, 'update']);
// Route::delete('/record/{event}', [App\Http\Controllers\EventController::class, 'destroy']);
