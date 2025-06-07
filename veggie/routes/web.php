<?php

use App\Http\Controllers\Clients\AuthController;
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
// Đăng ký tài khoản
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('post-register');
//Kích hoạt tài khoản qua email
Route::get('/activate/{token}', [AuthController::class, 'activate'])->name('activate');

//Đăng nhập tài khoản
Route::get('/login', [AuthController::class, 'showloginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post-login');

//Đăng xuất tài khoản
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Giao diện phía Admin