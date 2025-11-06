<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', [GuestController::class, 'utama'])->name('utama');
Route::get('/ahli-jawatankuasa', [GuestController::class, 'ahliJawatankuasa'])->name('ahli-jawatankuasa');
Route::get('/fasiliti', [GuestController::class, 'fasiliti'])->name('fasiliti');
Route::get('/aktiviti', [GuestController::class, 'aktiviti'])->name('aktiviti');
Route::get('/budiman-biz-hub', [GuestController::class, 'budimanBizHub'])->name('budiman-biz-hub');
Route::get('/hubungi-kami', [GuestController::class, 'hubungiKami'])->name('hubungi-kami');

// Auth Routes

// Admin Routes