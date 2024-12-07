<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/reports', [ReportController::class, 'index'])->name('reports');

Route::delete('/reports/{id}', [ReportController::class, 'destroy'])->name('reports.destroy');
Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
Route::put('/reports/update', [ReportController::class, 'update'])->name('reports.update');




