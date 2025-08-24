<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/en');
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-z]{2}']], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about', AboutController::class)->name('about');
    Route::get('/services', ServicesController::class)->name('services');
    Route::get('/portfolio', PortfolioController::class)->name('portfolio');
    Route::get('/blog', BlogController::class)->name('blog');
    Route::get('/contact', ContactController::class)->name('contact');
});
