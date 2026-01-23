<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{project:slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
