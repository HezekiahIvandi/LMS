<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    // Menampilkan halaman utama dengan daftar semua course dan artikel.
    public function index() 
    {
        $course = Course::all();
        $article = Article::all();

        return view('home', compact('course', 'article'));
    }
}
