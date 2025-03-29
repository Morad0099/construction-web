<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/single-service', function () {
    return view('service-single');
});
Route::get('/single-blog', function () {
    return view('blog-single');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/single-project', function () {
    return view('project-single');
});
Route::get('/faq', function () {
    return view('faqs');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/team', function () {
    return view('team');
});
