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

Route::get('/about', [CompanyInfoController::class, 'index'])->name('about');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{service}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');
Route::post('/services', [App\Http\Controllers\ServiceController::class, 'store'])->name('services.store');

Route::post('/cart/add/{service}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');

Route::get('/events', [EventController::class, 'index'])->name('events');

Route::get('/webinars', [WebinarController::class, 'index'])->name('webinars');

Route::get('/marketing', [MarketingStrategyController::class, 'index'])->name('marketing');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
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
    Route::get('/admin/profile', [AProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

// Admin Authentication Routes
Route::get('/admin/forgot-password', [APasswordResetLinkController::class, 'create'])->name('admin.password.request');
Route::post('/admin/forgot-password', [APasswordResetLinkController::class, 'store'])->name('admin.password.email');
Route::get('/admin/reset-password/{token}', [ANewPasswordController::class, 'create'])->name('admin.password.reset');
Route::post('/admin/reset-password', [ANewPasswordController::class, 'store'])->name('admin.password.store');

// Breeze Auth Routes
require __DIR__.'/auth.php';
