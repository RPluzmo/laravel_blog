<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {return view('welcome');});

Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/blogs/create', [BlogController::class, 'create']);
Route::post('/blogs', [BlogController::class, 'store']);
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store']);


Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
Route::put('/blogs/{blog}', [BlogController::class, 'update']);
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('/categories/{category}', [CategoryController::class, 'update']);




Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/blogs/{blog}', [BlogController::class, 'show']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);
