<?php

use Illuminate\Support\Facades\Route;


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