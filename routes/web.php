<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


// ROUTE LOGIN
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);


//ROUTE PRODUCTS
Route::post('products', [ProductController::class, 'store']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::get('products/{id}/edit', [ProductController::class, 'edit']);
Route::patch('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);


//ROUTE SUPPLIERS
Route::post('suppliers', [SupplierController::class, 'store']);
Route::get('suppliers', [SupplierController::class, 'index']);
Route::get('suppliers/create', [SupplierController::class, 'create']);
Route::get('suppliers/{id}', [SupplierController::class, 'show']);
Route::get('suppliers/{id}/edit', [SupplierController::class, 'edit']);
Route::patch('suppliers/{id}', [SupplierController::class, 'update']);
Route::delete('suppliers/{id}', [SupplierController::class, 'destroy']);
