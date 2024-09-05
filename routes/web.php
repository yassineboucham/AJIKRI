<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncesController;
use App\Http\Controllers\EditAnnounceController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\singupController;
use App\Http\Controllers\editprofileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/create', [CreateController::class, 'create'])->name('create');

Route::get('/announcement', [AnnouncementController::class, 'announcement'])->name('announcement');

Route::get('/announces', [AnnouncesController::class, 'index'])->name('announces');

Route::post('/EditAnnounce', [EditAnnounceController::class, 'editannounce'])->name('editannounce');

Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/singup', [singupController::class, 'singup'])->name('singup');

Route::get('/editprofile', [editprofileController::class, 'editprofile'])->name('editprofile');
