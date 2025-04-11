<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminLoginController,
    APasswordResetLinkController,
    ANewPasswordController,
    AProfileController,
};
use Illuminate\Support\Facades\Auth;
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
    Route::get('/dashboard', fn() => redirect()->route('home'))->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Authenticated Routes
Route::middleware('auth:admin')->group(function () {
    // Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::resource('admin/about', CompanyInfoController::class);
    Route::resource('admin/team', TeamMemberController::class);
    Route::get('/admin/profile', [AProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

// Admin Authentication Routes
// Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
// Route::post('/admin/login', [AdminLoginController::class, 'store'])->name('admin.login');
// Route::post('/admin/logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/forgot-password', [APasswordResetLinkController::class, 'create'])->name('admin.password.request');
Route::post('/admin/forgot-password', [APasswordResetLinkController::class, 'store'])->name('admin.password.email');
Route::get('/admin/reset-password/{token}', [ANewPasswordController::class, 'create'])->name('admin.password.reset');
Route::post('/admin/reset-password', [ANewPasswordController::class, 'store'])->name('admin.password.store');

// Breeze Auth Routes
require __DIR__.'/auth.php';
