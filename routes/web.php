<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RealEstatesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::resource('/real-estate', RealEstatesController::class)->except(['index', 'create']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', AdminController::class)->name('admin');
    //    Route::resource('/users', UserController::class)->except(['index', 'store', 'destroy', 'create', 'update']);
});

require __DIR__.'/auth.php';
