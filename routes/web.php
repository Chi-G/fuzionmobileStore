<?php

use Illuminate\Support\Facades\Route;
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
    HomeController,
    TermsPrivacyController,
    CartController,
    StripeWebhookController
};

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// User About Routes
Route::get('/about', [CompanyInfoController::class, 'index'])->name('about');

// User Teams Routes
Route::get('/team', [TeamMemberController::class, 'index'])->name('team');
Route::post('/team', [TeamMemberController::class, 'store'])->name('team.store');
Route::put('/team/{teamMember}', [TeamMemberController::class, 'update'])->name('team.update');
Route::delete('/team/{teamMember}', [TeamMemberController::class, 'destroy'])->name('team.destroy');

// User Services Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

// User Events Routes
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

// User Webinar Routes
Route::get('/webinars', [WebinarController::class, 'index'])->name('webinars');
Route::get('/webinars/{webinar}', [WebinarController::class, 'show'])->name('webinars.show');
Route::post('/webinars', [WebinarController::class, 'store'])->name('webinars.store');

// User Marketing Routes
Route::get('/marketing', [MarketingStrategyController::class, 'index'])->name('marketing');

// User Products Routes
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// User Cart Routes
Route::group([], function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/process', [CartController::class, 'processCheckout'])->name('checkout.process');
    Route::post('/cart/buy-now/{product}', [CartController::class, 'buyNow'])->name('cart.buy-now');
    Route::get('/buy-now-checkout', [CartController::class, 'buyNowCheckout'])->name('cart.buy-now-checkout');
    Route::post('/buy-now-checkout/process', [CartController::class, 'processBuyNowCheckout'])->name('cart.buy-now-checkout.process');
    Route::get('/order-confirmation/{order}', [CartController::class, 'confirmation'])->name('order.confirmation');
});

Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook'])->name('stripe.webhook');

// User Posts Routes
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// User Contact Routes
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscribe');

// User Terms and Privacy Routes
Route::get('/terms', [TermsPrivacyController::class, 'term'])->name('terms');
Route::get('/privacy', [TermsPrivacyController::class, 'privacy'])->name('privacy');

// User Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => redirect()->route('home'))->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Breeze Auth Routes
require __DIR__.'/auth.php';
?>
