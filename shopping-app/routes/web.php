<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/user/register', [UserController::class, 'register'])->name('user.register');
Route::post('/user/register/store', [UserController::class, 'store'])->name('user.signup');
Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
    $user = User::where('user_id', $id)->first(); // Retrieve the user

    // Ensure the user exists before proceeding
    if (!$user) {
        return redirect()->route('user.login')->with('error', 'User not found.');
    }

    if (sha1($user->email) === $hash) {
        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('user.login')->with('success', 'Email của bạn đã được xác nhận.');
    }

    return redirect()->route('user.login')->with('error', 'Liên kết xác nhận không hợp lệ.');
})->name('verification.verify');

Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/signin', [UserController::class, 'signin'])->name('user.signin');

Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
