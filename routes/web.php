<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

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

Route::get('/', [TugasController::class, 'index'])->name('tugases.index');
Route::post('/tugases', [TugasController::class, 'store'])->name('tugases.store');
Route::delete('/tugases/{tugas}', [TugasController::class, 'destroy'])->name('tugases.destroy');

