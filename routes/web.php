<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ruta Principal
Route::get('/', function () {
    return view('auth.login');
});

// Rutas Auth
Route::group(['middleware' => ['auth', 'is_admin']], function() {

        // Ruta calendar:
        Route::get('/calendar', function() {
            return view('admin.calendar');
        });

        // Ruta sum:
        Route::get('/sum', [EventController::class, 'sumHrs'])->name('sum.sum');
        
        // Rutas record
        Route::group(['prefix' => 'record'], function() {

            // CRUD:
            Route::get('/{search?}', [EventController::class, 'index'])->name('record.index');
            Route::post('/create', [EventController::class, 'create'])->name('record.create');
            Route::get('/{event}/edit', [EventController::class, 'edit'])->name('record.edit');
            Route::put('/{event}', [EventController::class, 'update'])->name('record.update');
            Route::delete('/{event}', [EventController::class, 'destroy'])->name('record.destroy');

        });

});