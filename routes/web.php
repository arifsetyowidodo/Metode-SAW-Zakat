<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MustahikController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/mustahik', [MustahikController::class, 'index']);
Route::get('/mustahik-new', [MustahikController::class, 'new']);
Route::post('/mustahik-add', [MustahikController::class, 'add']);
Route::get('/mustahik-detail/{id}', [MustahikController::class, 'detail']);
Route::post('/mustahik-update/{id}', [MustahikController::class, 'update']);
Route::get('/mustahik-delete/{id}', [MustahikController::class, 'delete']);
Route::get('/dashboard', [DashboardController::class, 'index']);
