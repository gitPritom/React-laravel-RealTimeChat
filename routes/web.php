<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'home');
    });
});

require __DIR__ . '/settings.php';
