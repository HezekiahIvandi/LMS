<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Models\Article;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login page route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::delete('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
Route::post('/kursus/store', [KursusController::class, 'store'])->name('kursus.store');
Route::put('/kursus/edit/{id}', [KursusController::class, 'edit'])->name('kursus.edit');
Route::delete('/kursus/destroy/{id}', [KursusController::class, 'destroy'])->name('kursus.destroy');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::get('/mahasiswa/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
Route::put('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::delete('/announcement/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

Route::get('/announcement/search', [AnnouncementController::class, 'search'])->name('announcement.search');
