<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');
            Route::resource('properties', App\Http\Controllers\Admin\PropertyController::class);
        });
    });
});
