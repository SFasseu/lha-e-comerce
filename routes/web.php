<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\LigneCommandeController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('front/contact');
});
Route::get('/service', function () {
    return view('front/service');
});
Route::get('/propos', function () {
    return view('front/propos');
});
Route::get('/pourquoi', function () {
    return view('front/pourquoi');
});
Route::get('/acceuil', function () {
    return view('front/acceuil');
});

Route::get('/boutique', function () {
    return view('front/boutique');
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

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{product}', [ShopController::class, 'order'])->name('shop.order');
Route::post('/shop/{product}', [ShopController::class, 'orderSave'])->name('shop.order.store');