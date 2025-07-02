<?php

use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tugas', [TugasController::class, 'index'])->name('tugas.index');
Route::post('/tugas/store', [TugasController::class, 'store'])->name('tugas.store');
Route::delete('/tugas/destroy', [TugasController::class, 'destroy'])->name('tugas.destroy');
Route::get('/data', [TugasController::class, 'data'])->name('tugas.data');
