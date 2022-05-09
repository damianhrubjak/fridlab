<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }

    public function blogPage()
    {
        return view('pages.blog');
    }

    public function modelsPage()
    {
        return view('pages.models');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }
}
