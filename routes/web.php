<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipementsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Models\Equipements;
use Illuminate\Support\Facades\Route;

Route::get('', [AuthenticatedSessionController::class, 'create'])
->name('login'); 

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */


Route::middleware('auth')->group(function () {
   
    // Dashboard
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    // Application
    Route::controller(ApplicationsController::class)->group(function(){
        Route::get('applications','index')->name('application');
        Route::get('application/create','create')->name('application.create');
        Route::post('application/create','store')->name('application.store');
        Route::get('application/{id}/show','show')->name('application.show');
        Route::patch('application/{id}/update','update')->name('application.update');
        Route::delete('application/{id}/delete','destroy')->name('application.delete');
        
    });

    // Services
    Route::controller(ServicesController::class)->group(function(){
        Route::get('services','index')->name('service');
        Route::get('service/create','create')->name('service.create');
        Route::post('service/create','store')->name('service.store');
        Route::get('service/{id}/show','show')->name('service.show');
        Route::patch('service/{id}/update','update')->name('service.update');
        Route::delete('service/{id}/delete','destroy')->name('service.delete');
    });
    
    // Equipement
    Route::controller(EquipementsController::class)->group(function(){
        Route::get('equipements','index')->name('equipement');
        Route::get('equipement/create','create')->name('equipement.create');
        Route::get('equipement/{id}/show','show')->name('equipement.show');
        Route::patch('equipement/{id}/update','update')->name('equipement.update');
        Route::get('equipement/{id}/delete','destroy')->name('equipement.delete');
        Route::post('equipement/create','store')->name('equipement.store');
    });
    
});


require __DIR__.'/auth.php';
