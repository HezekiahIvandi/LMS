<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
//register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//profile
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::delete('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
Route::get('/article/search', [ArticleController::class, 'search'])->name('article.search');
Route::get('/article/sortasctitle', [ArticleController::class, 'sortAscTitle'])->name('article.sortasctitle');
Route::get('/article/sortdesctitle', [ArticleController::class, 'sortDescTitle'])->name('article.sortdesctitle');
Route::get('/article/sortascdate', [ArticleController::class, 'sortAscDate'])->name('article.sortascdate');
Route::get('/article/sortdescdate', [ArticleController::class, 'sortDescDate'])->name('article.sortdescdate');
Route::get('/article/content/{id}', [ArticleController::class, 'content'])->name('article.content');
Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');

Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
Route::post('/kursus/store', [KursusController::class, 'store'])->name('kursus.store');
Route::get('/kursus/edit/{id}', [KursusController::class, 'edit'])->name('kursus.edit');
Route::put('/kursus/update/{id}', [KursusController::class, 'update'])->name('kursus.update');
Route::delete('/kursus/destroy/{id}', [KursusController::class, 'destroy'])->name('kursus.destroy');
Route::get('/kursus/content/{id}', [KursusController::class, 'content'])->name('kursus.content');
Route::post('/kursus/content/{id}/store', [KursusController::class, 'contentStore'])->name('kursus.contentstore');

Route::get('/kursus/search', [KursusController::class, 'search'])->name('kursus.search');
Route::get('/kursus/sort', [KursusController::class, 'sort'])->name('kursus.sort');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::get('/mahasiswa/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
Route::put('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::delete('/announcement/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

Route::get('/announcement/search', [AnnouncementController::class, 'search'])->name('announcement.search');
Route::get('/announcement/sort', [AnnouncementController::class, 'sort'])->name('announcement.sort');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
