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
use App\Http\Controllers\backend\loginController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\resourcesCategoriesController;
use App\Http\Controllers\backend\resourcesController as BackendResourcesController;
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

Route::get('/login', [loginController::class, 'login'])->name('backendlogin');
 Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('/add-blog-data', [Indexcontroller::class, 'add_blog_data'])->name('add_blog_data');
Route::post('/login/user', [loginController::class, 'loginsave'])->name('loginsave');

route::get('/resources-category/list', [resourcesCategoriesController::class, 'index'])->name('resources-category.list');
route::get('/resources-category/create', [resourcesCategoriesController::class, 'create'])->name('resources-category.create');
route::post('/resources-category/store', [resourcesCategoriesController::class, 'store'])->name('resources-category.store');
Route::get('/resources-category/show/{id}', [resourcesCategoriesController::class, 'show'])->name('resources-category.show');
route::get('/resources-category/edit/{id}', [resourcesCategoriesController::class, 'edit'])->name('resources-category.edit');
Route::put('resources-category/update/{id}', [resourcesCategoriesController::class, 'update'])->name('resources-category.update');
Route::delete('resources-category/delete/{id}', [resourcesCategoriesController::class, 'destroy'])->name('resources-category.destroy');

route::get('/resources/list', [BackendResourcesController::class, 'index'])->name('resources.list');
route::get('/resources/create', [BackendResourcesController::class, 'create'])->name('resources.create');
route::post('/resources/store', [BackendResourcesController::class, 'store'])->name('resources.store');
Route::get('/resources/show/{id}', [BackendResourcesController::class, 'show'])->name('resources.show');
route::get('/resources/edit/{id}', [BackendResourcesController::class, 'edit'])->name('resources.edit');
Route::put('resources/update/{id}', [BackendResourcesController::class, 'update'])->name('resources.update');
Route::delete('resources/delete/{id}', [BackendResourcesController::class, 'destroy'])->name('resources.destroy');





