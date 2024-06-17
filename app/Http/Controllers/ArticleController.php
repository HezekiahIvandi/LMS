<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Index
    public function index() {
        $article = Article::orderByDesc('created_at')->get();

        return view('article.index', compact('article'));
    }

    // Membuat Article
    public function store(Request $request) {
        $request->validate([
            'article_title' => 'required',
            'article_summary' => 'required',
            'article_image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('article_image')) {
            $imageName = time().'.'.$request->article_image->getClientOriginalExtension();
            if ($request->article_image->storeAs('public', $imageName)) {
                // Image stored successfully
                $article = new Article;
                $article->article_title = $request->article_title;
                $article->article_summary = $request->article_summary;
                $article->article_image = 'storage/' . $imageName;
                $article->save();
                return redirect()->route('article.index')->with('success', 'Artikel baru berhasil ditambahkan.');
            } else {
                // Gagal menyimpan image
                return redirect()->back()->with('error', 'Failed to store image.');
            }
        } else {
            // Tidak ada image
            return redirect()->back()->with('error', 'No image uploaded.');
        }
    }

    // M<enghapus article
    public function destroy($id) {
        $art = Article::find($id);
        $art->delete();

        return redirect()->route('article.index')
            ->with('success', 'Artikel berhasil di hapus!');
    }

    // Mencari Article
    public function search(Request $request) {
        $search = $request->get('search');
    
        // Convert isi search bar ke lowercase
        $searchLower = strtolower($search);
    
        $article = Article::where(DB::raw('lower(article_title)'), 'like', '%' . $searchLower . '%')
            ->orWhere(DB::raw('lower(article_summary)'), 'like', '%' . $searchLower . '%')
            ->get();
    
        return view('article.index', compact('article'));
    }

    // Sorting ascending berdasarkan title (A-Z)
    public function sortAscTitle() {
        $article = Article::orderBy('article_title')->get();

        return view('article.index', compact('article'));
    }

    // Sorting descending berdasarkan title (Z-A)
    public function sortDescTitle() {
        $article = Article::orderByDesc('article_title')->get();

        return view('article.index', compact('article'));
    } 

    // Sorting artikel dari yang terlama
    public function sortAscDate() {
        $article = Article::orderBy('created_at')->get();

        return view('article.index', compact('article'));
    }  

    // Sorting artikel dari yang terbaru
    public function sortDescDate() {
        $article = Article::orderByDesc('created_at')->get();

        return view('article.index', compact('article'));
    }

    public function content($id) {
        $article = Article::find($id);

        return view('article.content', compact('article'));
    }
}
