<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminLoginController
};
use App\Http\Controllers\{
    CompanyInfoController,
    TeamMemberController,
    ServiceController,
    EventController,
    WebinarController,
    MarketingStrategyController,
    ProductController,
    PostController,
    SubscriberController,
    ProfileController,
    HomeController
};

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('services', ServiceController::class);
Route::resource('events', EventController::class);
Route::resource('webinars', WebinarController::class);
Route::resource('marketing', MarketingStrategyController::class);
Route::resource('products', ProductController::class);
Route::resource('posts', PostController::class);
Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscribe');

// User Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Authenticated Routes
Route::middleware('auth:admin')->group(function () {
    Route::resource('about', CompanyInfoController::class);
    Route::resource('team', TeamMemberController::class);
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
});

// Admin Login Routes
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

// Breeze Auth Routes
require __DIR__.'/auth.php';
