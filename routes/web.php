<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Developer\Dashboard as DeveloperDashboard;
use App\Livewire\Info\Profile;
use App\Livewire\Info\User;
use App\Livewire\Job\Post;
use App\Livewire\Landing;
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
Route::fallback(function () {
    return redirect()->back();
})->name('404');
// Route::get('/', Dashboard::class)->name("dashboard")->middleware('role:admin','role:customer','guest');
Route::get('beranda',DeveloperDashboard::class)->name('beranda')->middleware('role:developer');
Route::get('login', AuthLogin::class)->name("login")->middleware(middleware:'guest');
// Route::get('counter',Counter::class)->name("counter");
Route::get('register',Register::class)->name("register")->middleware('guest');
Route::get('/logout', [SocialiteController::class,'logout'])->middleware(middleware:'auth')->name('logout');
Route::get('/',Landing::class)->name("landing");
Route::get('dashboard',Dashboard::class)->name("dashboard")->middleware('role:customer');
Route::get('profile',Profile::class)->name('profile')->middleware('auth');
Route::get('select',User::class)->name('select')->middleware('auth');
Route::get('post',Post::class)->name('post')->middleware('role:customer');
// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])->middleware(['guest'])->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])->middleware(['guest'])->name('callback');
