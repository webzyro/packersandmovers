<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services.index');

Route::get('/services/{slug}', function ($slug) {
    return view('service-single', compact('slug'));
})->name('services.show');

Route::get('/projects', function () {
    return view('projects');
})->name('projects.index');

Route::get('/projects/{slug}', function ($slug) {
    return view('project-single', compact('slug'));
})->name('projects.show');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog-single', compact('slug'));
})->name('blog.show');

Route::get('/team', function () {
    return view('team');
})->name('team.index');

Route::get('/team/{slug}', function ($slug) {
    return view('team-single', compact('slug'));
})->name('team.show');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/branches', function () {
    return view('branches');
})->name('branches');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');
