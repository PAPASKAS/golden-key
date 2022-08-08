<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RealEstatesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('/real-estate', RealEstatesController::class)->except(['index', 'show', 'destroy', 'create', 'update']);

Route::middleware('auth')->group(function () {
//    Route::resource('/users', UserController::class)->except(['index', 'store', 'destroy', 'create', 'update']);
    Route::get('/admin', AdminController::class)->name('admin');
});

require __DIR__.'/auth.php';
