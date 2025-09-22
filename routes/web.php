<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route pour la page de confirmation
Route::get('/confirmation', function () {
    return view('admin.confirmation');
})->name('confirmation');

// Route for backend
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class)->except(['show']);
});

// Route Post pour l'envoie de formulaire
Route::post('/contact/store', [\App\Http\Controllers\Admin\ContactController::class, 'store'])->name('contact.store');

// Route pour le form de connexion
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
