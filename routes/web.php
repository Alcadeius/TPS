<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\WebhookController;
use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Developer\Dashboard as DeveloperDashboard;
use App\Livewire\Info\Data;
use App\Livewire\Info\Profile;
use App\Livewire\Info\Status;
use App\Livewire\Info\Transaction;
use App\Livewire\Info\User;
use App\Livewire\Job\Browse;
use App\Livewire\Job\Post;
use App\Livewire\Job\Update;
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
Route::get('profile',Profile::class)->name('profile')->middleware('role:customer');
Route::get('select',User::class)->name('select')->middleware('auth');
Route::get('post',Post::class)->name('post')->middleware('role:customer');
Route::get('browse',Browse::class)->name('browse')->middleware('auth');
Route::get('profile/data',Data::class)->name('data')->middleware('role:customer');
Route::get('profile/status',Status::class)->name('status')->middleware('role:customer');
Route::get('/transaksi/{id}',Transaction::class)->name('transaksi')->middleware('role:customer');
Route::get('/update/{id}',Update::class)->name('update')->middleware('role:customer');
Route::get('/news/{id}',[WebhookController::class,'handleMidtransWebhook'])->middleware('role:customer')->name('news');
// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])->middleware(['guest'])->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])->middleware(['guest'])->name('callback');
