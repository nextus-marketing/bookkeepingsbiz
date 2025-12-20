<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'Frontend.home')->name('home');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-conditions', 'Frontend.terms-and-conditions')->name('terms-and-conditions');

Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/frontend.php';
