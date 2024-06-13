<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Index
    public function index() {
        $article = Article::all();

        return view('article', compact('article'));
    }

    // Create Article
    public function store(Request $request) {
        $request->validate([
            'article_title' => 'required',
            'article_summary' => 'required',
        ]);
        
        $article = new Article;
        $article->article_title = $request->article_title;
        $article->article_summary = $request->article_summary;;
        $article->save();
        
        return redirect()->route('article')
            ->with('success', 'Artikel baru berhasil ditambahkan.');
    }

    public function destroy($id) {
        $art = Article::find($id);
        $art->delete();

        return redirect()->route('article')
            ->with('success', 'Artikel berhasil di hapus!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
    
        // Convert the search term to lowercase
        $searchLower = strtolower($search);
    
        $article = Article::where(DB::raw('lower(article_title)'), 'like', '%' . $searchLower . '%')
            ->orWhere(DB::raw('lower(article_summary)'), 'like', '%' . $searchLower . '%')
            ->get();
    
        return view('article', compact('article'));
    }
}
