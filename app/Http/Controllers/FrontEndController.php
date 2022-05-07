<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }

    public function aboutUsPage()
    {
        return view('pages.about-us');
    }
}
