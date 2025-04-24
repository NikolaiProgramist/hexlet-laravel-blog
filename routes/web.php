<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'index'])
    ->name('page.index');

Route::get('/about', [PageController::class, 'about'])
    ->name('page.about');

Route::resource('articles', ArticleController::class);
