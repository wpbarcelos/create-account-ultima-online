<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccountController::class, 'create'])->name('account.create');
Route::post('/', [AccountController::class, 'store'])->name('account.store');
