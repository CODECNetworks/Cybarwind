<?php

use App\Http\Controllers\backend\authController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\blogViewController;
use App\Http\Controllers\frontend\careerController;
use App\Http\Controllers\frontend\cnInsightController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\eventController;
use App\Http\Controllers\frontend\eventViewController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\l3templateController;
use App\Http\Controllers\frontend\resourcesController;
use App\Http\Controllers\frontend\resourcesViewController;
use App\Http\Controllers\frontend\servicesController;
use App\Http\Controllers\frontend\testimonialsController;
use App\Http\Controllers\frontend\trainingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Indexcontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/services', [servicesController::class, 'index'])->name('services');
Route::get('/training', [trainingController::class, 'index'])->name('training');
Route::get('/resources', [resourcesController::class, 'index'])->name('resources');
Route::get('/resources-view', [resourcesViewController::class, 'index'])->name('resources-view');
Route::get('/blog', [blogController::class, 'index'])->name('blogs');
Route::get('/blog-view', [blogViewController::class, 'index'])->name('blog-view');
Route::get('/events', [eventController::class, 'index'])->name('events');
Route::get('/events-view', [eventViewController::class, 'index'])->name('events-view');
Route::get('/testimonials', [testimonialsController::class, 'index'])->name('testimonials');
Route::get('/career', [careerController::class, 'index'])->name('careers');
Route::get('/contact', [contactController::class, 'index'])->name('contact');
Route::get('/cn-insight', [cnInsightController::class, 'index'])->name('cn-insight');
Route::get('/l3-template', [l3templateController::class, 'index'])->name('l3-template');

// BACKEND ROOUTE

Route::get('/login', [authController::class, 'login'])->name('login');


