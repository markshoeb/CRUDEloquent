<?php

use App\Http\Controllers\StudentController;
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

Route::get('/home', [StudentController::class, 'index'])->name('index');
Route::post('/home', [StudentController::class, 'create'])->name('create');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('destroy');
