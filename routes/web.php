<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
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

// Route untuk menampilkan halaman utama (halaman kursus)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route untuk halaman registrasi
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route untuk halaman profil
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::put('/profile/editPfp', [ProfileController::class, 'editPfp'])->name('profile.editPfp')->middleware('auth');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('auth');

// Route untuk artikel
Route::get('/article', [ArticleController::class, 'index'])->name('article.index')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
Route::delete('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');
Route::get('/article/search', [ArticleController::class, 'search'])->name('article.search')->middleware('auth');
Route::get('/article/sortasctitle', [ArticleController::class, 'sortAscTitle'])->name('article.sortasctitle')->middleware('auth');
Route::get('/article/sortdesctitle', [ArticleController::class, 'sortDescTitle'])->name('article.sortdesctitle')->middleware('auth');
Route::get('/article/sortascdate', [ArticleController::class, 'sortAscDate'])->name('article.sortascdate')->middleware('auth');
Route::get('/article/sortdescdate', [ArticleController::class, 'sortDescDate'])->name('article.sortdescdate')->middleware('auth');
Route::get('/article/content/{id}', [ArticleController::class, 'content'])->name('article.content')->middleware('auth');
Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');

// Route untuk kursus
Route::get('/course', [CourseController::class, 'index'])->name('course.index')->middleware('auth');
Route::post('/course/store', [CourseController::class, 'store'])->name('course.store')->middleware('auth');
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit')->middleware('auth');
Route::put('/course/update/{id}', [CourseController::class, 'update'])->name('course.update')->middleware('auth');
Route::delete('/course/destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy')->middleware('auth');
Route::get('/course/content/{id}', [CourseController::class, 'content'])->name('course.content')->middleware('auth');;
Route::post('/course/content/{id}/store', [CourseController::class, 'contentStore'])->name('course.contentstore')->middleware('auth');;
Route::get('/course/content/{id}/{current}', [CourseController::class, 'contentSelect'])->name('course.contentselect')->middleware('auth');;
Route::delete('/course/content/destroy/{id}', [CourseController::class, 'contentDestroy'])->name('course.contentdestroy')->middleware('auth');
Route::put('/course/content/{id}/update', [CourseController::class, 'contentUpdate'])->name('course.contentupdate')->middleware('auth');
Route::put('/course/content/deleteText/{id}', [CourseController::class, 'deleteText'])->name('course.contentdeletetext')->middleware('auth');
Route::put('/course/content/deleteFile/{id}', [CourseController::class, 'deleteFile'])->name('course.contentdeletefile')->middleware('auth');
Route::put('/course/content/deleteVideo/{id}', [CourseController::class, 'deleteVideo'])->name('course.contentdeletevideo')->middleware('auth');

Route::get('/course/search', [CourseController::class, 'search'])->name('course.search')->middleware('auth');
Route::get('/course/sort', [CourseController::class, 'sort'])->name('course.sort')->middleware('auth');

// Route untuk halaman tentang
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk pengumuman
Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index')->middleware('auth');
Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store')->middleware('auth');
Route::get('/mahasiswa/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit')->middleware('auth');
Route::put('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('announcement.update')->middleware('auth');
Route::delete('/announcement/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy')->middleware('auth');

Route::get('/announcement/search', [AnnouncementController::class, 'search'])->name('announcement.search')->middleware('auth');
Route::get('/announcement/sort', [AnnouncementController::class, 'sort'])->name('announcement.sort')->middleware('auth');

// Route untuk halaman utama
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
