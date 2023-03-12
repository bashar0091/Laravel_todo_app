<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Data show Page Route
Route::get('/', [HomeController::class, 'index'])->name('/');

// Data create route
Route::get('data/create', [TodoController::class, 'create'])->name('data.create');
Route::post('data/store', [TodoController::class, 'store'])->name('data.store');

// data delete route 
Route::get('data/delete/{id}', [TodoController::class, 'destroy'])->name('data.delete');

// data update
Route::get('data/update/{id}', [TodoController::class, 'update'])->name('data.update');