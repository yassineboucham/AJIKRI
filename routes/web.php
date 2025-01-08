<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncesController;
use App\Http\Controllers\EditAnnounceController;
use App\Http\Controllers\editprofileController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::patch('/announcement/{id}/availability', [AnnouncesController::class, 'updateAvailability'])->name('announcement.updateAvailability');

Route::get('/account', [AccountController::class, 'account'])->name('account');

Route::resource('/announcement', AnnouncementController::class);

Route::get('/announces', [AnnouncesController::class, 'announces'])->name('announces');

Route::post('/EditAnnounce', [EditAnnounceController::class, 'editannounce'])->name('editannounce');

Route::get('/editprofile', [editprofileController::class, 'editprofile'])->name('editprofile');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
