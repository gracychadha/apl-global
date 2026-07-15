<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactLeadController;
use App\Http\Controllers\SubscriberController;

Route::post('/subscribe', [SubscriberController::class, 'store'])
    ->name('subscribe.store');
Route::get('/', function () {
    return view('website.views.welcome');
})->name('home');
Route::get('/about-us', function () {
    return view('website.views.about-us');
})->name('about-us');
Route::get('/why-choose', function () {
    return view('website.views.why-choose');
})->name('why-choose');
Route::get('/services', function () {
    return view('website.views.service-detail');
})->name('services');
Route::get('/services', function () {
    return view('website.views.service-detail');
})->name('services');
Route::get('/gallery', function () {
    return view('website.views.gallery');
})->name('gallery');
Route::get('/career', function () {
    return view('website.views.career');
})->name('career');
Route::get('/contact-us', function () {
    return view('website.views.contact-us');
})->name('contact-us');
Route::get('/our-team', function () {
    return view('website.views.our-team');
})->name('our-team');
Route::get('/air-freight', function () {
    return view('website.views.air-freight');
})->name('air-freight');
Route::get('/door-to-door-freight', function () {
    return view('website.views.door-to-door-freight');
})->name('door-to-door-freight');
Route::get('/ocean-freight', function () {
    return view('website.views.ocean-freight');
})->name('ocean-freight');
Route::get('/road-freight', function () {
    return view('website.views.road-freight');
})->name('road-freight');
Route::get('/warehousing', function () {
    return view('website.views.warehousing');
})->name('warehousing');
Route::get('/packaging', function () {
    return view('website.views.packaging');
})->name('packaging');
Route::get('/customs-brokerage', function () {
    return view('website.views.customs-brokerage');
})->name('customs-brokerage');
Route::get('/track', function () {
    return view('website.views.track');
})->name('track');
Route::get('/our-blogs', function () {
    return view('website.views.our-blogs');
})->name('our-blogs');
Route::get('/blog-details', function () {
    return view('website.views.blog-details');
})->name('blog-details');
Route::get('/privacy-policy', function () {
    return view('website.views.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function () {
    return view('website.views.terms-condition');
})->name('terms-conditions');
// Route::get('/blog-details/{id}', function ($id) {
//     return view('website.views.blog-details', compact('id'));
// })->name('blog-details');

// CRUD for Contact Leads
Route::post('/contact-us-submit', [ContactLeadController::class, 'store'])
    ->name('contact.store');