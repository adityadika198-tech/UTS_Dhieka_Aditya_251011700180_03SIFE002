<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CraftController;

Route::get('/', [CraftController::class, 'index'])->name('crafts.index');

Route::get('/crafts/{craft}', [CraftController::class, 'show'])->name('crafts.show');
