<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Course;
use App\Models\Lessons;

class CourseController extends Controller
{
    // Menampilkan semua course yang ada, diurutkan berdasarkan tanggal pembuatan secara descending.
    public function index() 
    {
        $course = Course::orderByDesc('created_at')->get();

        return view('course.index', compact('course'));
    }

    // Menyimpan course baru ke dalam database.
    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required',
            'trainer' => 'required',
        ]);
        
        $course = new Course;
        $course->name = $request->name;
        $course->image_url = $request->image_url;
        $course->trainer = $request->trainer;
        $course->save();
        
        return redirect()->route('course.index')
            ->with('success', 'Course baru berhasil ditambahkan.');
    }

    // Menghapus course dari database.
    public function destroy($id) 
    {
        $crs = Course::find($id);
        $crs->delete();
        return redirect()->route('course.index')
            ->with('success', 'Course berhasil dihapus');
    }

    // Menampilkan form untuk mengedit course.
    public function edit($id)
    {
        $course = Course::find($id); 
        return view('course.edit', compact('course'));
    }

    // Memperbarui course yang ada di database.
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

        Course::whereId($id)->update($updateData);

        return redirect()->route('course.index')
                         ->with('success', 'Course berhasil diperbarui');
    }

    // Mencari course berdasarkan nama atau trainer.
    public function search(Request $request)
    {
        $search = $request->get('search');
    
        // Convert the search term to lowercase
        $searchLower = strtolower($search);
    
        $course = Course::where(DB::raw('lower(name)'), 'like', '%' . $searchLower . '%')
            ->orWhere(DB::raw('lower(trainer)'), 'like', '%' . $searchLower . '%')
            ->get();

        return view('course.index', compact('course'));
    }

    // Menampilkan course yang diurutkan berdasarkan kategori gambar dan tanggal pembuatan.
    public function sort(Request $request)
    {
        $category = $request->input('category');
    
        if ($category && $category != 'all') {
            $course = Course::where('image_url', 'like', '%' . $category . '%')
                            ->orderBy('created_at', 'desc')
                            ->get();
        } else {
            $course = Course::orderBy('created_at', 'desc')->get();
        }
    
        return view('course.index', compact('course'));
    }

    // Menampilkan konten dari suatu course, termasuk daftar lessons.
    public function content($id) 
    {
        $course = Course::find($id);
        $lessons = Lessons::where('course_id', $id)->orderBy('lesson_title', 'asc')->get();
        $current_lessons = $lessons->first();

        return view('course.content', compact('course', 'lessons', 'current_lessons'));
    }

    // Menyimpan lesson baru untuk suatu course.
    public function contentStore(Request $request, $id) 
    {
        $request->validate([
            'lesson_title' => 'required',
        ]);
        
        $lessons = new Lessons;
        $lessons->course_id = $id;
        $lessons->lesson_title = $request->lesson_title;
        $lessons->save();
        
        return redirect()->route('course.content', $id);
    }

    // Memilih lesson tertentu untuk ditampilkan dalam konten course.
    public function contentSelect($id, $current) 
    {
        $course = Course::find($id);
        $lessons = Lessons::where('course_id', $id)->orderBy('lesson_title', 'asc')->get();
        $current_lessons = Lessons::find($current);

        return view('course.content', compact('course', 'lessons', 'current_lessons'));
    }

    // Menghapus lesson dari suatu course.
    public function contentDestroy($id, $lesson) 
    {
        $lesson = Lessons::find($lesson);
        $lesson->delete();
        return redirect()->route('course.content', $id);
    }

    // Memperbarui konten dari suatu lesson dalam suatu course.
    public function contentUpdate(Request $request, $id) 
    {
        $lesson = Lessons::find($id);

        $request->validate([
            'lesson_title' => 'required',
            'text_content' => 'required',
            'file_content_url' => ['nullable', 'mimes:pdf'],
            'video_content_url' => ['nullable', 'mimes:mp4'],
        ]);

        $updateData = [
            'lesson_title' => $request->lesson_title,
            'text_content' => $request->text_content,
        ];

        if ($request->hasFile('file_content_url')) {
            $filePath = $request->file('file_content_url')->store('LessonFiles', 'public');
            $filePath = 'storage/' . $filePath;
            $updateData['file_content_url'] = $filePath;
        }

        if ($request->hasFile('video_content_url')) {
            $filePathVid = $request->file('video_content_url')->store('LessonVideo', 'public');
            $filePathVid = 'storage/' . $filePathVid;
            $updateData['video_content_url'] = $filePathVid;
        }

        Lessons::whereId($id)->update($updateData);

        return redirect()->route('course.content', $lesson->course_id);
    }
}
