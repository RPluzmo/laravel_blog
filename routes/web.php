<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {return view('welcome');});

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/create', [BlogController::class, 'create']);
Route::post('/blogs', [BlogController::class, 'store']);


Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
Route::put('/blogs/{blog}', [BlogController::class, 'update']);


Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);


Route::get('/blogs', [BlogController::class, 'index']);


Route::get('/blogs/{blog}', [BlogController::class, 'show']);

