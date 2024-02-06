<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\backend\OrderControllerBackend;
use App\Http\Controllers\backend\PriceController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

                // Services
    Route::get('services', [ServiceController::class, 'index'])
                ->name('services.index');

    Route::get('services/create', [ServiceController::class, 'create'])
                ->name('services.create');

    Route::post('services/store', [ServiceController::class, 'store'])
                ->name('services.store');

    Route::get('services/edit/{id}', [ServiceController::class, 'edit'])
                ->name('services.edit');

    Route::post('services/update/{id}', [ServiceController::class, 'update'])
                ->name('services.update');

    Route::get('services/delete/{id}', [ServiceController::class, 'delete'])
                ->name('services.delete');


                // Packeges
    Route::get('prices', [PriceController::class, 'index'])
                ->name('prices.index');

    Route::get('prices/create', [PriceController::class, 'create'])
                ->name('prices/create');

    Route::post('prices/store', [PriceController::class, 'store'])
                ->name('prices.store');

    Route::get('prices/edit/{id}', [PriceController::class, 'edit'])
                ->name('prices.edit');

    Route::post('prices/update/{$id}', [PriceController::class, 'update'])
                ->name('prices.update');

    Route::get('prices/delete/{id}', [PriceController::class, 'delete'])
                ->name('prices.delete');


    // Orders
    Route::get('orders', [OrderControllerBackend::class, 'index']);
    Route::post('order/status/{id}', [OrderControllerBackend::class, 'status'])->name('order.status');


});
