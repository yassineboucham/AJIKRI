<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/create', [CreateController::class, 'create'])->name('create');

Route::get('/announcement', [AnnouncementController::class, 'announcement'])->name('announcement');
