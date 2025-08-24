<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

// Routes for the default locale ('en') without a URL prefix.
// These routes will have simple names like 'home', 'about', etc.
Route::group([], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about', AboutController::class)->name('about');
    Route::get('/services', ServicesController::class)->name('services');
    Route::get('/portfolio', PortfolioController::class)->name('portfolio');
    Route::get('/blog', BlogController::class)->name('blog');
    Route::get('/contact', ContactController::class)->name('contact');
});

// Group for prefixed locales (e.g., 'pl').
// These routes will have names prefixed with 'locale.' (e.g., 'locale.home').
$prefixedLocales = array_diff(config('app.supported_locales'), [config('app.locale')]);

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => implode('|', $prefixedLocales)],
    'as' => 'locale.'
], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about', AboutController::class)->name('about');
    Route::get('/services', ServicesController::class)->name('services');
    Route::get('/portfolio', PortfolioController::class)->name('portfolio');
    Route::get('/blog', BlogController::class)->name('blog');
    Route::get('/contact', ContactController::class)->name('contact');
});
