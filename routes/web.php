<?php

use App\Http\Controllers\SocialiteController;
use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Counter;
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
    return view('welcome');
});
Route::get('login', AuthLogin::class)->name("login")->middleware(middleware:'guest');

Route::get('counter',Counter::class)->name("counter");
// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])->middleware(['guest'])->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])->middleware(['guest'])->name('callback');
