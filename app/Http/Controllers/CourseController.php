<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Course;
use App\Models\Lessons;

class CourseController extends Controller
{
    public function index() 
    {
        $course = Course::all();

        return view('course.index', compact('course'));
    }

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

    public function destroy($id) 
    {
        $crs = Course::find($id);
        $crs->delete();
        return redirect()->route('course.index')
            ->with('success', 'Course berhasil di hapus');
    }

    public function edit($id)
    {
        $course = Course::find($id); 
        return view('course.edit', compact('course'));
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

        Course::whereId($id)->update($updateData);

        return redirect()->route('course.index')
                         ->with('success', 'Course berhasil di perbaharui');
    }

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

    public function content($id) {
        $course = Course::find($id);
        $lessons = Lessons::where('course_id', $id)->orderBy('lesson_title', 'asc')->get();

        $current_lessons = $lessons->first();

        return view ('course.content', compact('course', 'lessons', 'current_lessons'));
    }

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

    public function contentSelect($id, $current) {
        $course = Course::find($id);
        $lessons = Lessons::where('course_id', $id)->orderBy('lesson_title', 'asc')->get();

        $current_lessons = Lessons::find($current);

        return view ('course.content', compact('course', 'lessons', 'current_lessons'));
    }

    public function contentDestroy($id, $lesson) {
        $lesson = Lessons::find($lesson);
        $lesson->delete();
        return redirect()->route('course.content', $id);
    }

    public function contentUpdate(Request $request, $id) {
        $request->validate([
            'lesson_id' => 'required',
            'lesson_title' => 'required',
        ]);

        $updateData = [
            'lesson_title' => $request->lesson_title,
        ];

        Lessons::whereId($request->lesson_id)->update($updateData);

        return redirect()->route('course.content', $id);
    }
    
}
