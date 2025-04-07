<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('client');
Route::post('contact', [ContactController::class, 'contact'])->middleware('throttle:4,1')->name('contact');

require __DIR__.'/auth.php';
