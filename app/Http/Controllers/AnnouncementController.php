<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Course;

class AnnouncementController extends Controller
{
    public function index() 
    {
        $announcement = Announcement::all();
        $course = Course::all(); 

        return view('announcement.index', compact('announcement', 'course'));
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
        $course = Course::all(); 

        return view('announcement.edit', compact('anc', 'course'));
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $searchLower = strtolower($search);
    
        $announcement = Announcement::where(DB::raw('lower(title_announcement)'), 'like', '%' . $searchLower . '%')
            ->orWhere(DB::raw('lower(announcement)'), 'like', '%' . $searchLower . '%')
            ->get();
    
        $course = Course::all();
    
        return view('announcement.index', compact('announcement', 'course'));
    }

    public function sort()
    {
        $announcement = Announcement::orderBy('created_at', 'desc')->get();
        $course = Course::all(); 
    
        return view('announcement.index', compact('announcement', 'course'));
    }
}
