<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('contact', [ContactController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';
