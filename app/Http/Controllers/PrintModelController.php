<?php

namespace App\Http\Controllers;

use App\Models\PrintModel;
use Illuminate\Http\Request;
use App\Services\FileService;
use App\Http\Requests\AddModelRequest;
use App\Http\Requests\EditModelRequest;

class PrintModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printModels = PrintModel::with('files')->latest()->get();
        return view('admin.pages.models', compact('printModels'));
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
        $mainImageId = null;
        $images_ids = [];

        // Store images
        $modelImages = $request->file('images');
        foreach ($modelImages as $key => $modelImage) {
            $newImage = FileService::saveFile($modelImage, 'images/', 'images');

            if ($key === 0) {
                $mainImageId = $newImage->id;
            } else {
                $images_ids[] = $newImage->id;
            }
        }

        // Store files
        $modelFiles = $request->file('models');
        foreach ($modelFiles as $modelFile) {
            $newFile = FileService::saveFile($modelFile, 'models/', 'models');
            $models_ids[] = $newFile->id;
        }

        // Store model to DB
        $newPrintModel = PrintModel::create($request->all());

        // Attach files to M:N table
        $newPrintModel->files()->attach($mainImageId, ['type' => 'main_image']);
        if (count($images_ids) > 0) {
            $newPrintModel->files()->attach($images_ids, ['type' => 'image']);
        }
        $newPrintModel->files()->attach($models_ids, ['type' => 'file']);

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
        $printModels = PrintModel::with('files')->latest()->get();

        $printModel->load('files');

        $files = $printModel->files->groupBy('pivot.type');

        return view('admin.pages.show-print-model', compact('printModel', 'printModels', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrintModel  $printModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PrintModel $printModel)
    {
        return view('admin.pages.edit-model', compact('printModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrintModel  $printModel
     * @return \Illuminate\Http\Response
     */
    public function update(EditModelRequest $request, PrintModel $printModel)
    {
        $printModel->update($request->all());
        return redirect()->back()->with('success', 'úspešne vytvorený');
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
