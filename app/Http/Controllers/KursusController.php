<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required',
            'trainer' => 'required',
        ]);

        $update = [
            'name' => $request->name,
            'image_url' => $request->image_url,
            'trainer' => $request->trainer,
        ];

        Kursus::whereId($id)->update($update);

        return redirect()->route('kursus.index')
            ->with('success', 'Kursus berhasil di perbaharui');
    }
}
