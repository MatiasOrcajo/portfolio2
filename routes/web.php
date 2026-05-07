<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects/factibilidad', function () {
    return view('projects.factibilidad');
})->name('projects.factibilidad');
