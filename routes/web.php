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
use App\Http\Controllers\OrdersController;

// Login Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Logout
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

// Groupe pour les routes admin
Route::middleware(['auth', 'user.type'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('cars', CarController::class)->except(['create', 'edit', 'show']);
    });
});

// Groupe pour les routes client
Route::get('/', [VitrineController::class, 'index'])->name('vitrine.index');
Route::get('/vehicule', [VitrineController::class, 'list_cars_store'])->name('vitrine.vehicule');
Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');
Route::middleware(['auth', 'user.type'])->group(function () {
    // Route::get('/vehicule', fn()=>view('vitrine.vehicule'));
});

// 



























// vitrine
Route::get('/about', fn() => view('vitrine.about-us'));
Route::get('/terms', fn() => view('vitrine.terms-condition'));
Route::get('/inscription', fn() => view('vitrine.contact-us'));

Route::get('/contact', [VitrineController::class, 'contact'])->name('vitrine.contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');

Route::get('/gallery', [VitrineController::class, 'galerie'])->name('vitrine.galerie');

Route::get('/contact', [VitrineController::class, 'contact'])->name('vitrine.contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');






// Route protégée pour l'accueil de l'utilisateur authentifié

Route::middleware(['auth'])->group(function () {

    Route::get('admin/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('admin/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::delete('admin/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');





    Route::prefix('admin')->name('admin.')->group(function () {
        // Route::delete('/cars/images/{id}', [CarImageController::class, 'destroy'])
        // ->name('cars.images.destroy');
    });


    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except(['create', 'edit', 'show']);
    });

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('brands', BrandController::class)->except(['create', 'edit', 'show']);
    });
});








// // Routes protégées pour l'admin
// Route::middleware(['auth', 'user.type:admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
//     // Autres routes admin...
// });

// // Routes protégées pour les clients
// Route::middleware(['auth', 'user.type:client'])->prefix('client')->name('client.')->group(function () {
//     Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
//     // Autres routes client...
// });

// // Route par défaut (optionnelle)
// Route::get('/home', function () {
//     $user = auth()->user();
    
//     if ($user->isAdmin()) {
//         return redirect()->route('admin.dashboard');
//     }
    
//     if ($user->isClient()) {
//         return redirect()->route('client.dashboard');
//     }
    
//     return view('home');
// })->middleware('auth')->name('home');
