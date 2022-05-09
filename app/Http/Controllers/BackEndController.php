<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BackEndController extends Controller
{
    public function homePage()
    {
        return view('admin.pages.home');
    }
}
