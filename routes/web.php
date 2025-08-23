<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/services', ServicesController::class);
Route::get('/portfolio', PortfolioController::class);
Route::get('/blog', BlogController::class);
Route::get('/contact', ContactController::class);
