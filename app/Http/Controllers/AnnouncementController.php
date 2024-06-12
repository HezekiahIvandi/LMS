<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Kursus;

class AnnouncementController extends Controller
{
    public function index() 
    {
        $announcement = Announcement::all();
        $kursus = Kursus::all(); 

        return view('announcement.index', compact('announcement', 'kursus'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'course_name' => 'required',
            'title_announcement' => 'required',
            'announcement' => 'required',
        ]);
        
        $announcement = new Announcement;
        $announcement->course_name = $request->course_name;
        $announcement->title_announcement = $request->title_announcement;
        $announcement->announcement = $request->announcement;
        $announcement->save();
        
        return redirect()->route('announcement.index')
            ->with('success', 'Pengumuman baru berhasil ditambahkan!');
    }

    public function destroy($id) 
    {
        $anc = Announcement::find($id);
        $anc->delete();
        return redirect()->route('announcement.index')
            ->with('success', 'Pengumuman berhasil di hapus!');
    }

    public function edit($id)
    {
        $anc = Announcement::find($id);
        $kursus = Kursus::all(); 
        return view('announcement.edit', compact('anc', 'kursus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
            'title_announcement' => 'required',
            'announcement' => 'required',
        ]);

        $update = [
            'course_name' => $request->course_name,
            'title_announcement' => $request->title_announcement,
            'announcement' => $request->announcement,
        ];

        Announcement::whereId($id)->update($update);

        return redirect()->route('announcement.index')
            ->with('success', 'Pengumuman berhasil di perbaharui!');
    }
}
