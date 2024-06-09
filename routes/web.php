<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;

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

// Route to display the homepage (kursus page)
Route::get('/', [KursusController::class, 'index'])->name('home');
Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');

// Login page route
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Route to store course data
Route::post('/kursus', [KursusController::class, 'store'])->name('kursus.store');