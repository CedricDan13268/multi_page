<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog-home', function () {
    return view('blog-home');
});

Route::get('/blog-post', function () {
    return view('blog-post');
});