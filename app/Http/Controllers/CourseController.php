<?php
namespace App\Http\Controllers;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    
    public function create()
    {
        $topics = Topic::all();
        return view('courses.create', compact('topics'));
    }
    
    public function store(Request $request)
    {
        $request->validate([  
            'name' => 'required',
            'topic_id' => 'required',
        ]);
    
        $courses = new Course();
        $courses->name = $request->name;
        $courses->topic_id = $request->topic_id;
        $courses->save();
    
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }
    
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
    
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }
    
    public function update(Request $request, Course $course)
    {
        $course->name = $request->input('name');
        $course->save();
    
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }
    
    public function destroy(Course $course)
    {
        $course->delete();
    
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
    
}
