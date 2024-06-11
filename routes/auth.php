<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\PasswordResetController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::post('login',LoginController::class);
Route::post('logout',LogoutController::class);
Route::post('register',RegisterController::class);
Route::post('password/email', [PasswordResetController::class, 'sentLinkEmail'])->name('pass.reset.link');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->middleware('signed')->name('password.reset');
Route::post('email/verify/send', [VerifyEmailController::class, 'sendMail']);
Route::post('email/verify', [VerifyEmailController::class, 'verify'])->middleware('signed')->name('verify-email');

?>
