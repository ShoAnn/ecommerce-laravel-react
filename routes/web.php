<?php

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

// Homepage
Route::get('/', function () {
    return 'Welcome to the Homepage';
})->name('home');

// Product Listings
Route::get('/products', function () {
    return 'Browse our Products';
})->name('products.index');

// Product Details Page
Route::get('/products/{product}', function ($product) {
    return "View Product Details for Product ID: $product";
})->name('products.show');

// Shopping Cart
Route::get('/cart', function () {
    return 'View Shopping Cart';
})->name('cart.index');

// Checkout Pages
Route::get('/checkout', function () {
    return 'Checkout Page';
})->name('checkout.index');

// User Account Dashboard
Route::get('/profile', function () {
    return 'User Account Dashboard';
})->name('profile.index');

// Product Reviews and Ratings
Route::get('/products/{product}/review', function ($product) {
    return "Leave a Review for Product ID: $product";
})->name('reviews.create');

// Contact/Support Page
Route::get('/contact', function () {
    return 'Contact and Support Page';
})->name('contact.index');

// Privacy Policy
Route::get('/privacy-policy', function () {
    return 'Privacy Policy';
})->name('legal.privacy');

// Terms of Service
Route::get('/terms-of-service', function () {
    return 'Terms of Service';
})->name('legal.terms');
