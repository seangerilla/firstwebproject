<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});


Route::get('/registration', function () {
    return view('registration');
})->name("registrationpage");


Route::get('/profilepage', function () {
    return view('profilepage');
});


Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/skills', function () {
    return view('skills');
})->name("skills");






