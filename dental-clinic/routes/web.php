<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
require __DIR__.'/auth.php';

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Admin routes (auth protected)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Services
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    Route::post('/services', [AdminController::class, 'storeService'])->name('services.store');
    Route::put('/services/{service}', [AdminController::class, 'updateService'])->name('services.update');
    Route::delete('/services/{service}', [AdminController::class, 'destroyService'])->name('services.destroy');

    // Team
    Route::get('/team', [AdminController::class, 'team'])->name('team');
    Route::post('/team', [AdminController::class, 'storeTeam'])->name('team.store');
    Route::put('/team/{teamMember}', [AdminController::class, 'updateTeam'])->name('team.update');
    Route::delete('/team/{teamMember}', [AdminController::class, 'destroyTeam'])->name('team.destroy');

    // Contact
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
    Route::put('/contact', [AdminController::class, 'updateContact'])->name('contact.update');

    // Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::put('/settings', [AdminController::class, 'updateSettings'])->name('settings.update');
});