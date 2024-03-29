<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use App\Models\Blog;
use App\Services\FileService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('image')->latest()->get();
        return view('admin.pages.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddBlogRequest $request)
    {
        // Store main image
        $image = FileService::saveFile($request->file('image'), 'images/', 'images');

        // Create blog data
        $blogData = $request->all();
        $blogData['file_id'] = $image->id;

        // Store blog to DB
        Blog::create($blogData);

        // Send successful response
        return redirect()->back()->with('success', 'úspešne vytvorený');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blogs = Blog::all();
        $blog->load('image');
        return view('admin.pages.show-blog', compact('blog', 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.pages.edit-blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(EditBlogRequest $request, Blog $blog)
    {
        $blog->update($request->all());
        return redirect()->back()->with('success', 'úspešne vytvorený');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->load('image');
        FileService::deleteFile($blog->image);

        $blog->delete();

        return redirect()->route('admin-pages.blogy.index')->with('success_delete', 'úspešne vymazaný');
    }
}
