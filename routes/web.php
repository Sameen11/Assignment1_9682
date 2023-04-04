<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'index');
// Route::view('/', 'welcome');
Route::get('services', function() {
    return View::make('services');
});
// Route::get('contactmessages', function() {
//     return View::make('contactmessages');
// });
Route::view('/about', 'about');


Route::get('contact', [UserController::class, 'contact']);
Route::post('contact', [UserController::class, 'savedata']);
Route::get('contactmessages', [UserController::class, 'show']);

Route::get('edit', 'UserController@edit');
// Route::post('message/edit/{id}', 'UserController@edit');


Route::get('delete','UserController@index');
// Route::post('delete/{id}','UserController@destroy');
// Route::post('edit/{id}', [UserController::class, 'edit']);
// Route::post('edit/{id}', [UserController::class, 'edit']);
// Route::post('edit', 'UserController@update');
// // Route::post('edit', 'UserController'); 
