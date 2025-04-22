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
Route::post('/team', [TeamMemberController::class, 'store'])->name('team.store');
Route::put('/team/{teamMember}', [TeamMemberController::class, 'update'])->name('team.update');
Route::delete('/team/{teamMember}', [TeamMemberController::class, 'destroy'])->name('team.destroy');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{service}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');
Route::post('/services', [App\Http\Controllers\ServiceController::class, 'store'])->name('services.store');

Route::post('/cart/add/{service}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');
Route::post('/events', [App\Http\Controllers\EventController::class, 'store'])->name('events.store');

Route::get('/webinars', [WebinarController::class, 'index'])->name('webinars');
Route::get('/webinars/{webinar}', [App\Http\Controllers\WebinarController::class, 'show'])->name('webinars.show');
Route::post('/webinars', [App\Http\Controllers\WebinarController::class, 'store'])->name('webinars.store');

Route::get('/marketing', [MarketingStrategyController::class, 'index'])->name('marketing');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart/add/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');

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
