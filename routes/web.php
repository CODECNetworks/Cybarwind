<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Indexcontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Indexcontroller::class, 'index'])->name('home');

Route::get('/services', [Indexcontroller::class, 'services'])->name('services');

Route::get('/training', [Indexcontroller::class, 'training'])->name('training');

Route::get('/resources', [Indexcontroller::class, 'resources'])->name('resources');
Route::get('/resources-view', [Indexcontroller::class, 'resourceview'])->name('resources-view');

Route::get('/blog', [Indexcontroller::class, 'blog'])->name('blogs');
Route::get('/blog-view', [Indexcontroller::class, 'blogview'])->name('blog-view');

Route::get('/events', [Indexcontroller::class, 'events'])->name('events');
Route::get('/events-view', [Indexcontroller::class, 'eventsview'])->name('events-view');

Route::get('/testimonials', [Indexcontroller::class, 'testimonials'])->name('testimonials');
Route::get('/career', [Indexcontroller::class, 'careers'])->name('careers');
Route::get('/contact', [Indexcontroller::class, 'contact'])->name('contact');
Route::get('/cn-insight', [Indexcontroller::class, 'cninsight'])->name('cn-insight');

Route::get('/l3-template', [Indexcontroller::class, 'l3template'])->name('l3-template');