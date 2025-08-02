<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CommandeDetailController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\VenteDetailController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\OrdonnanceDetailController;
use App\Http\Controllers\DashboardController;




Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);//->name('dashboard')->middleware('auth');

Route::resource('permissions',App\Http\Controllers\PermissionController::class);


// Routes protégées par auth
//Route::middleware(['auth'])->group(function () {



    // Admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class)->names('users');
        Route::resource('roles', RoleController::class)->names('roles');
    });



    // Pharmacie
    Route::prefix('pharmacie')->name('pharmacie.')->group(function () {
        Route::resource('medicaments', MedicamentController::class)->names('medicaments');
        Route::resource('fournisseurs', FournisseurController::class)->names('fournisseurs');
    });

    // Stock
    Route::prefix('stock')->name('stock.')->group(function () {
        Route::resource('commandes', CommandeController::class)->names('commandes');
        Route::resource('commande-details', CommandeDetailController::class)->names('commande-details');
    });

    // Vente
    Route::prefix('vente')->name('vente.')->group(function () {
        Route::resource('ventes', VenteController::class)->names('ventes');
        Route::resource('vente-details', VenteDetailController::class)->names('vente-details');
    });

    // Ordonnances
    Route::prefix('ordonnance')->name('ordonnance.')->group(function () {
        Route::resource('ordonnances', OrdonnanceController::class)->names('ordonnances');
        Route::resource('ordonnance-details', OrdonnanceDetailController::class)->names('ordonnance-details');
    });

//});
