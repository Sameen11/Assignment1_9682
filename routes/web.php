<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'index');
// Route::view('/', 'welcome');
Route::get('services', function() {
    return View::make('services');
});

Route::view('/about', 'about');


Route::get('contact', [UserController::class, 'contact']);
Route::post('contact', [UserController::class, 'savedata']);
