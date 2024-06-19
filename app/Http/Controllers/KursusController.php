<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Kursus;

class KursusController extends Controller
{
    public function index() 
    {
        $kursus = Kursus::all();

        return view('kursus.index', compact('kursus'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required',
            'trainer' => 'required',
        ]);
        
        $kursus = new Kursus;
        $kursus->name = $request->name;
        $kursus->image_url = $request->image_url;
        $kursus->trainer = $request->trainer;
        $kursus->save();
        
        return redirect()->route('kursus.index')
            ->with('success', 'Kursus baru berhasil ditambahkan.');
    }

    public function destroy($id) 
    {
        $crs = Kursus::find($id);
        $crs->delete();
        return redirect()->route('kursus.index')
            ->with('success', 'Kursus berhasil di hapus');
    }

    public function edit($id)
    {
        $kursus = Kursus::find($id); 
        return view('kursus.edit', compact('kursus'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required',
            'trainer' => 'required',
        ]);

        $updateData = [
            'name' => $request->name,
            'image_url' => $request->image_url,
            'trainer' => $request->trainer,
        ];

        Kursus::whereId($id)->update($updateData);

        return redirect()->route('kursus.index')
                         ->with('success', 'Kursus berhasil di perbaharui');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
    
        // Convert the search term to lowercase
        $searchLower = strtolower($search);
    
        $kursus = Kursus::where(DB::raw('lower(name)'), 'like', '%' . $searchLower . '%')
            ->orWhere(DB::raw('lower(trainer)'), 'like', '%' . $searchLower . '%')
            ->get();

    
        return view('kursus.index', compact('kursus'));
    }

    public function sort(Request $request)
    {
        $category = $request->input('category');
    
        if ($category && $category != 'all') {
            $kursus = Kursus::where('image_url', 'like', '%' . $category . '%')
                            ->orderBy('created_at', 'desc')
                            ->get();
        } else {
            $kursus = Kursus::orderBy('created_at', 'desc')->get();
        }
    
        return view('kursus.index', compact('kursus'));
    }
    
}
