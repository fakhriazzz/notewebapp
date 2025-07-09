<?php

use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TugasController::class, 'index'])->name('tugas.index');
Route::post('/tugas/store', [TugasController::class, 'store'])->name('tugas.store');
Route::post('/tugas/search', [TugasController::class, 'search'])->name('tugas.search');
Route::delete('/tugas/{id}', [TugasController::class, 'destroy'])->name('tugas.destroy');
Route::get('/data', [TugasController::class, 'data'])->name('tugas.data');
