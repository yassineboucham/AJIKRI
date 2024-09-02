<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/create', [CreateController::class, 'create'])->name('create');

Route::get('/announcement', [AnnouncementController::class, 'announcement'])->name('announcement');

Route::get('/announces', [AnnouncesController::class, 'index'])->name('announces');
