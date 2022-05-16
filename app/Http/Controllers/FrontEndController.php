<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PrintModel;


class FrontEndController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }

    public function blogPage()
    {
        $blogs = Blog::with('image')->latest()->get();
        return view('pages.blog', compact('blogs'));
    }

    public function modelsPage()
    {
        $models = PrintModel::with('files')->latest()->get();
        return view('pages.models', compact('models'));
    }

    public function contactPage()
    {

        return view('pages.contact');
    }

    public function loginPage()
    {
        return view('pages.login');
    }

    public function showBlog(Blog $blog)
    {
        $blog->load('image');
        return view('pages.show-blog', compact('blog'));
    }

    public function showModel(PrintModel $printModel)
    {
        $printModel->load('files');
        $fileGroups = $printModel->files->groupBy('pivot.type');
        return view('pages.show-model', compact('printModel', 'fileGroups'));
    }
}
