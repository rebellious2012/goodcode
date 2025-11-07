<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Locale;

Route::group([
     'prefix' => Locale::getLocaleFromUrl(),
     'middleware' => [\App\Http\Middleware\Locale::class],
],function(){
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about', AboutController::class)->name('about');
    Route::get('/services', ServicesController::class)->name('services');
    Route::get('/portfolio', PortfolioController::class)->name('portfolio');
    Route::get('/blog', BlogController::class)->name('blog');
    Route::get('/contact', ContactController::class)->name('contact');
});

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware(['web'])->prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('login');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

        Route::resource('users', UserController::class)->except(['show']);
        Route::resource('portfolio', PortfolioItemController::class)->except(['show'])->parameters([
            'portfolio' => 'portfolioItem'
        ]);
        Route::resource('blog', BlogPostController::class)->except(['show'])->parameters([
            'blog' => 'blogPost'
        ]);
    });
});

require __DIR__.'/_clear.php';
require __DIR__.'/_setlocale.php';