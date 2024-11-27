<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;

// vitrine
Route::get('/temoignage', function () {return view('vitrine.temoignage');});
Route::get('/about', function () {return view('vitrine.about-us');});
Route::get('/mission', function () {return view('vitrine.mission');});
Route::get('/activite', function () {return view('vitrine.activite');});
Route::get('/partenaire', function () {return view('vitrine.partenaire');});
Route::get('/bureau', function () {return view('vitrine.bureau');});
Route::get('/temoignage', function () {return view('vitrine.temoignage');});
Route::get('/boxe', function () {return view('vitrine.boxe');});
Route::get('/boxe-edu', function () {return view('vitrine.boxe-edu');});
Route::get('/boxe-ama', function () {return view('vitrine.boxe-ama');});
Route::get('/boxe-pro', function () {return view('vitrine.boxe-pro');});
Route::get('/formateur', function () {return view('vitrine.formateur');});
Route::get('/inscription', function () {return view('vitrine.contact-us');});

Route::get('/contact', [VitrineController::class, 'contact'])->name('vitrine.contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');


Route::get('/galerie', [VitrineController::class, 'galerie'])->name('vitrine.galerie');

Route::get('/actualite', [VitrineController::class, 'actualites'])->name('vitrine.actualite');
Route::get('/actualite-detail/{id}', [VitrineController::class, 'show'])->name('vitrine.actualite-detail');

Route::get('/', [VitrineController::class, 'index'])->name('vitrine.index');
Route::get('/produit', [VitrineController::class, 'produits'])->name('vitrine.produit');
Route::get('/produit-detail/{id}', [VitrineController::class, 'showproduit'])->name('vitrine.produit-detail');





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
  //  Route::get('/admin/contact', [ContactController::class, 'showContact'])->name('admin.contact');
  // Route::get('/admin/rendezvous', [RendezvousController::class, 'showRendezvous'])->name('admin.rendezvous');

    Route::get('admin/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('admin/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::delete('admin/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');

    Route::get('/admin/events', [EventController::class, 'index'])->name('admin.events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');
    Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('admin.events.show');
    Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('produits', ProduitController::class);
    });


});
