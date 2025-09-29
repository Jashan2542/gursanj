<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProjectPageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\UserBlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\MessageShowController;

// Route for home page using closure
Route::get('/', function () {
    return view('home');
});

// Route for home page using direct view
Route::view('home','home')->name('home');


Route::get('/project', [ProjectPageController::class, 'show']);


// Route for team page
Route::view('team','team');

// Route for vision page
Route::view('vision','vision');

Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth:admin')->name('admin.dashboard');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});


Route::prefix('admin')->name('admin.')->group(function () {
    // Show all blogs
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');

    // Show create form
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');

    // Store new blog
    Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');

    // Show single blog (optional for admin)
    Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

    // Show edit form
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');

    // Update blog
    Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');

    // Delete blog
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

Route::get('/blogs', [UserBlogController::class, 'index'])->name('user.blogs.index');
Route::get('/blogs/{id}', [UserBlogController::class, 'show'])->name('user.blogs.show');




// Contact Form (User side)
Route::get('/contact', [MessageController::class, 'create'])->name('contact.form');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

// Admin Panel (Message list)
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages.index');

Route::get('/admin/messages/{id}', [MessageShowController::class, 'show'])
    ->name('admin.messages.show');
