<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipementsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Models\Equipements;
use Illuminate\Support\Facades\Route;

/* Route::get('', [AuthenticatedSessionController::class, 'create'])
->name('login'); */

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */


Route::middleware('auth')->group(function () {
    /* Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); */

    // Dashboard

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::controller(ApplicationsController::class)->group(function(){
        Route::get('applications','index')->name('application');
        Route::get('application/create','create')->name('application.create');
        Route::post('application/create','store')->name('application.store');
    });
    Route::controller(ServicesController::class)->group(function(){
        Route::get('services','index')->name('service');
        Route::get('service/create','create')->name('service.create');
        Route::post('service/create','store')->name('service.store');
    });
    
    Route::controller(EquipementsController::class)->group(function(){
        Route::get('equipements','index')->name('equipement');
        Route::get('equipement/create','create')->name('equipement.create');
        Route::post('equipement/create','store')->name('equipement.store');
    });
    
});


require __DIR__.'/auth.php';
