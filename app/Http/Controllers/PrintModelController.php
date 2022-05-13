<?php

namespace App\Http\Controllers;

use App\Models\PrintModel;
use Illuminate\Http\Request;
use App\Services\FileService;
use App\Http\Requests\AddModelRequest;

class PrintModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.models');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add-model');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddModelRequest $request)
    {

        $models_ids = [];

        $images_ids = [];

        // Store images
        $modelImages = $request->file('images');


        foreach ($modelImages as $modelImage) {
            $newImage = FileService::saveFile($modelImage, 'images/', 'images');
            $images_ids[] = $newImage->id;
        }

        // Store files
        $modelFiles = $request->file('models');
        foreach ($modelFiles as $modelFile) {
            $newFile = FileService::saveFile($modelFile, 'models/', 'models');
            $models_ids[] = $newFile->id;
        }

        // Store model to DB
        $newPrintModel = PrintModel::create($request->all());

        $newPrintModel->files()->attach($images_ids);
        $newPrintModel->files()->attach($models_ids);

        // Send successful response
        return redirect()->back()->with('success', 'úspešne vytvorený');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrintModel  $printModel
     * @return \Illuminate\Http\Response
     */
    public function show(PrintModel $printModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrintModel  $printModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PrintModel $printModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrintModel  $printModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrintModel $printModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrintModel  $printModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrintModel $printModel)
    {
        //
    }
}
