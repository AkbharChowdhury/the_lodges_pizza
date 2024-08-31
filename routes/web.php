<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::view('/', 'welcome');
Route::resource('pizzas', PizzaController::class)->only(['create', 'store', 'index', 'show', 'destroy']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
