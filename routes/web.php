<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncesController;
use App\Http\Controllers\EditAnnounceController;
use App\Http\Controllers\SingupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\editprofileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account', [AccountController::class, 'account'])->name('account');

Route::get('/createannounce', [CreateController::class, 'createannounce'])->name('createannounce');

Route::resource('/announcement', AnnouncementController::class);


Route::get('/announces', [AnnouncesController::class, 'announces'])->name('announces');

Route::post('/EditAnnounce', [EditAnnounceController::class, 'editannounce'])->name('editannounce');

Route::get('/singup', [SingupController::class, 'singup'])->name('singup');

Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/editprofile', [editprofileController::class, 'editprofile'])->name('editprofile');
