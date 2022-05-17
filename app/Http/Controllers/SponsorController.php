<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Services\FileService;
use App\Http\Requests\AddSponsorRequest;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::with('image')->get();
        return view('admin.pages.sponsors', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add-sponsor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSponsorRequest $request)
    {
        $image = FileService::saveFile($request->file('image'), 'images/', 'images');

        // Create Sponsor data
        $sponsorData = $request->all();
        $sponsorData['file_id'] = $image->id;

        // Store Sponsor to DB
        Sponsor::create($sponsorData);

        return redirect()->back()->with('success_store', 'úspešne vytvorený');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        $sponsor->load('image');
        FileService::deleteFile($sponsor->image);

        $sponsor->delete();

        return redirect()->back()->with('success_delete', 'úspešne vymazaný');
    }
}
