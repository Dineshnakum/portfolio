<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::prefix('me-admin')->group(function () {
    Auth::routes();

    Route::get('home', [HomeController::class, 'index'])->name('home');
});
