<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProjectPageController;


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

// Route for contact page
Route::view('contact','contact');





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

