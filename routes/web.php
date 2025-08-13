<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store'])->middleware('auth'); 

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
->middleware('auth')
->can('edit', 'product');

Route::patch('/products/{product}', [ProductController::class, 'update'])
->middleware('auth');



// auth:
Route::get('register', [RegisteredUserController::class, 'create']);
Route::post('register', [RegisteredUserController::class, 'store']);

Route::delete('/products/{product}', [ProductController::class, 'destroy'])
->middleware('auth');

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);
Route::view('/contact', 'contact');















