<?php

use App\Http\Controllers\Clients\AccountController;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Clients\ForgotPasswordController;
use App\Http\Controllers\Clients\ResetPasswordController;
use Illuminate\Support\Facades\Route;
// Giao diên phía người dùng(Clients)

//Các trang tĩnh
Route::get('/', function () {
    return view('clients.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('clients.pages.about');
});

Route::get('/service', function () {
    return view('clients.pages.service');
});

Route::get('/team', function () {
    return view('clients.pages.team');
});

Route::get('/faq', function () {
    return view('clients.pages.faq');
});

Route::middleware('guest')->group(function () {
    // Đăng ký tài khoản
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('post-register');

    //Đăng nhập tài khoản
    Route::get('/login', [AuthController::class, 'showloginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('post-login');

    //Chức năng quên mật khẩu người dùng
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
    //Đặt lại mật khẩu
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');


});

//Kích hoạt tài khoản qua email
Route::get('/activate/{token}', [AuthController::class, 'activate'])->name('activate');



//
Route::middleware(['auth.custom'])->group(function() {
    //Đăng xuất tài khoản
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    //Xây dựng trang account cho người dùng
    Route::prefix('account')->group(function(){
        Route::get('/', [AccountController::class, 'index'])->name('account');  
        Route::put('/update', [AccountController::class, 'update'])->name('account.update');

        Route::post('/change-password', [AccountController::class, 'changePassword'])->name('account.change-password');
    });
    
});



//Giao diện phía Admin