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

require __DIR__.'/_clear.php';
require __DIR__.'/_setlocale.php';