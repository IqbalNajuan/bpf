<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('halaman-about');
});
Route::get('/about', [PageController::class, 'showAboutPage'])->name('about');