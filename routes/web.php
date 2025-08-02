<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view("Home.index");
// });

Route::get('/',[HomeController::class,"index"]);
Route::post('/upload_post',[HomeController::class,"upload"]);
Route::get('/view_post',[HomeController::class,"viewPost"]);
Route::get('/deletePost/{id}',[HomeController::class,"deletePost"]);
Route::get('/updatePost/{id}',[HomeController::class,"updatePost"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
