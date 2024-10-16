<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\reportController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home', [MainController::class, 'showIndex'])->name('home');

Route::get('array', [MainController::class, 'showArray'])->name('array');

Route::get('/reports', [ReportController::class, 'index'])->name('report.index');