<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::get('/register', [FormController::class, 'register'])->name('register');

Route::post('/welcome', [FormController::class, 'welcome'])->name('welcome');

// create data
Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'store']);

// read data
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);

// update data
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/category/{id}', [CategoriesController::class, 'update']);

// delete data
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);
