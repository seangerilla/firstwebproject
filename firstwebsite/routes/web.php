<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//Get route example
Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

//Post route example
Route::post("/formsubmitted", function (Request $request) {
   $request->validate([
    'fullname' => 'required|min:3|max:30', 
    'email' => 'required|min:3|max:30|email', 
]);
    $fullname = $request->input("fullname");
    $email = $request->input("email");
    return "Your full name is $fullname, and your email is $email!";
   //return view('contact');
})->name("formsubmitted");

//Grouped routes
/*

Route::get('/home/contact', function () {
    return view('contact');
});

Route::get('/home/contact/organization', function () {
    return view('organization');
});

*/
//Parameters using routes
/*
Route::get('portfolio/{portfolio}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;
});

//Named route
Route::get('/test', function () {
    return "This is a test!";
})->name("testpage");*/

//Grouped routes
/*
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix("portfolio")->group(function() {
    Route::get('/company', function () {
        return view('company');
    });


    Route::get('/organization', function () {
        return view('organization');
    });
});*/



