<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;
class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        $topics=Topic::paginate();
        // return view('dashboard', ['topics' => $topics]);
        return view('topics.index', compact('topics'));

    }

    public function create()
    {
        $categories = Category::all();
        return view('topics.create', compact('categories'));
    }

    public function store(Request $request)

    {

        //$categories=category::create($request->only(['name']));

        $request->validate([  
            'name' => 'required',
            'category_id' => 'required',

        ]);

        $topics = new Topic();
        $topics->name         = $request->name;
        $topics->category_id  = $request->category_id;
        $topics->save();
        return redirect()->route('topics.index')->with('success', 'category  created successfully');
    }
    public function show(Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }

    public function edit(Topic $topic)
    {
        return view('topics.edit', compact('topic'));
    } 
        

    public function update(Request $request, Topic $topic)
    {
        $topic->name = $request->input('name');
        // $topic->options = $request->input('options');
        $topic->save();
        return redirect()->route('topics.index')->with('success', 'Topic updated successfully');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('topics.index')->with('success', 'Topic deleted successfully');
    }
}
