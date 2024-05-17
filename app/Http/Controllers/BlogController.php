<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('pages.blogs.index', ['blogs' => $blogs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'summary' => 'nullable|string',
            'content' => 'required|string'
        ]);

        Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('pages.blogs.show', ['blog' => $blog]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|string',
            'summary' => 'nullable|string',
            'content' => 'sometimes|string'
        ]);

        $blog->update($validatedData);

        return redirect()->route('blogs.show', ['blog' => $blog])->with('success', 'Blog edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted Successfully!');

    }
}