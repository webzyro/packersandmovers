<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/city/{slug}', [CityPageController::class, 'show'])->name('city.show');
Route::get('/city/{slug}/{service_slug}', [CityPageController::class, 'service'])->name('city.service');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');

Route::get('/routes/{slug}', [RouteController::class, 'show'])->name('route.show');

Route::post('/store-user', [ContactController::class, 'store'])->middleware('throttle:contact-form')->name('contacts.store');

Route::get('/our-projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/our-projects/{slug}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/our-branches', function () {
    return view('branch');
})->name('branch');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');
