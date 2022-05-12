<?php

namespace App\Http\Controllers;

use App\Models\Blog;

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
        return view('pages.models');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }

    public function loginPage()
    {
        return view('pages.login');
    }
}
