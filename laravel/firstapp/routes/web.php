<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'getHome'])->name('home');
Route::get('/fashion', [MainController::class, 'getFashion'])->name('fashion');
Route::get('/electronic', [MainController::class, 'getElectronic'])->name('electronic');
Route::get('/jewllery', [MainController::class, 'getJewllery'])->name('jewllery');
