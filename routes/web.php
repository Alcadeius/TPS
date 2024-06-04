<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('livewire.dashboard');
});
Route::get('login', AuthLogin::class)->name("login")->middleware(middleware:'guest');

Route::get('counter',Counter::class)->name("counter");
Route::get('register',Register::class)->name("register")->middleware('guest');
Route::get('/logout', [SocialiteController::class,'logout'])->middleware(middleware:'auth');
Route::get('dashboard',Dashboard::class)->name("dashboard")->middleware('guest');
// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])->middleware(['guest'])->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])->middleware(['guest'])->name('callback');
