<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', function () {
    return view('faq.faq');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
