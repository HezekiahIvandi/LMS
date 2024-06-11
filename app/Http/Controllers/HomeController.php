<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Kursus;

class HomeController extends Controller
{
    public function index() 
    {
        $kursus = Kursus::all();
        $article = Article::all();

        return view('home', compact('kursus', 'article'));
    }
}
