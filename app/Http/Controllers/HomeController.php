<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class HomeController extends Controller
{
    public function index() 
    {
        $kursus = Kursus::all();

        return view('home', compact('kursus'));
    }
}
