<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\BrandController;


// vitrine
Route::get('/about', fn()=>view('vitrine.about-us'));  
Route::get('/terms', fn()=>view('vitrine.terms-condition'));
Route::get('/inscription', fn()=>view('vitrine.contact-us'));
Route::get('/vehicule', fn()=>view('vitrine.vehicule'));

Route::get('/contact', [VitrineController::class, 'contact'])->name('vitrine.contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');

Route::get('/gallery', [VitrineController::class, 'galerie'])->name('vitrine.galerie'); 
Route::get('/', [VitrineController::class, 'index'])->name('vitrine.index'); 

Route::get('/contact', [VitrineController::class, 'contact'])->name('vitrine.contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');



// Login Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// Email Verification Routes
Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');



// Route protégée pour l'accueil de l'utilisateur authentifié
Route::get('/admin', [HomeController::class, 'index'])->name('');

Route::middleware(['auth'])->group(function () {

    Route::get('admin/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('admin/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::delete('admin/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');

    

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('cars', CarController::class)->except(['create','edit','show']);
    });

    Route::prefix('admin')->name('admin.')->group(function () {
    Route::delete('/cars/images/{id}', [CarImageController::class, 'destroy'])
        ->name('cars.images.destroy');
    });


    Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except(['create','edit','show']);
    });

    Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('brands', BrandController::class)->except(['create','edit','show']);
    });

});
