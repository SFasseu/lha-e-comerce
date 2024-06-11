<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\LigneCommandeController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AvisController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);

Route::resource('produit', ProduitController::class);
Route::resource('paiement', PaiementController::class);
Route::resource('lignecommande', LigneCommandeController::class);
Route::resource('commande', CommandeController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('avis', AvisController::class);