<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

<<<<<<< HEAD
Route::get('/', function() {
    return view('welcome'); 
 });
=======
// Route::get('/', function() {
//     return view('welcome'); 
// });
>>>>>>> 2d7670c2410b2e02a882d743389faa64bcada6e7

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);