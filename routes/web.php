<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy']);
Route::post('/search', SearchController::class);

Route::resource('projects', ProjectsController::class);

Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/create', [ProjectsController::class, 'create'])->middleware('auth');
Route::post('/projects', [ProjectsController::class, 'store'])->middleware('auth');
Route::get('/projects/{project}', [ProjectsController::class, 'show']);
Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit'])->middleware('auth');
Route::patch('/projects/{project}', [ProjectsController::class, 'update'])->middleware('auth');
Route::delete('/projects/{project}', [ProjectsController::class, 'destroy'])->middleware('auth');
