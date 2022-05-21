<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PrintModel;
use App\Models\Sponsor;

class FrontEndController extends Controller
{
    public function homePage()
    {
        $sponsors = Sponsor::with('image')->get();
        return view('pages.home', compact('sponsors'));
    }

    public function blogPage()
    {
        $blogs = Blog::with('image')->latest()->get();
        return view('pages.blog', compact('blogs'));
    }

    public function modelsPage()
    {
        $models = PrintModel::with('files')->where('is_private', '=', '0')->latest()->get();
        return view('pages.models', compact('models'));
    }

    public function contactPage()
    {
        $translations = [['Contact form was successfully submitted, you will receive e-mail soon' => __('Contact form was successfully submitted, you will receive e-mail soon')], ['Form is filled wrong, check entered values' => __('Form is filled wrong, check entered values')], ['Too many attempts, try again tomorrow' => __('Too many attempts, try again tomorrow')], ['Error occurred, try again later' => __('Error occurred, try again later')], ['Submit' => __('Submit')], ['Name and surname' => __('Name and surname')], ['Subject' => __('Subject')], ['Your message' => __('Your message')], ['Entered value is too short' => __('Entered value is too short')], ['Entered value is too long' => __('Entered value is too long')], ['This field does not match requested format' => __('This field does not match requested format')], ['This field is required' => __('This field is required')]];

        return view('pages.contact', compact('translations'));
    }

    public function loginPage()
    {
        return view('pages.login');
    }

    public function showBlog(string $lang, Blog $blog)
    {
        $blog->load('image');
        return view('pages.show-blog', compact('blog'));
    }

    public function showModel(string $lang, PrintModel $printModel)
    {
        $printModel->load('files');
        $fileGroups = $printModel->files->groupBy('pivot.type');
        return view('pages.show-model', compact('printModel', 'fileGroups'));
    }
}
