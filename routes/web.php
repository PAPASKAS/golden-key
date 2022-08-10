<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RealEstatesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', HomeController::class);

Route::resource('/real-estate', RealEstatesController::class)->only([
    'show', 'update', 'destroy', 'store'
]);

// temp routing
Route::get('/homes/1', function (Request $request): View {
    return view('temp.1');
});
Route::get('/homes/2', function (Request $request): View {
    return view('temp.2');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', AdminController::class)->name('admin');
    //    Route::resource('/users', UserController::class)->except(['index', 'store', 'destroy', 'create', 'update']);
});

require __DIR__.'/auth.php';
