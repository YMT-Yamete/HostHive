<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\EnsureAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(EnsureAuth::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(EnsureAuth::class);

Route::get('/websites', [WebsiteController::class, 'index'])->middleware(EnsureAuth::class);
Route::post('/websites/upload', [WebsiteController::class, 'upload'])->middleware(EnsureAuth::class);

Auth::routes();


