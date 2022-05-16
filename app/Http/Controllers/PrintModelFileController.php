<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddFilesToModelRequest;
use App\Models\File;
use App\Models\PrintModel;
use App\Services\FileService;
use Illuminate\Http\Request;

class PrintModelFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PrintModel $printModel)
    {
        $printModel->load('files');
        $fileGroups = $printModel->files->groupBy('pivot.type');

        return view('admin.pages.print-model-files', compact('fileGroups', 'printModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PrintModel $printModel)
    {
        return view('admin.pages.add-print-model-files', compact('printModel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrintModel $printModel, AddFilesToModelRequest $request)
    {
        $models_ids = [];
        $images_ids = [];

        // Store images
        $modelImages = $request->file('images');
        if (!is_null($modelImages)) {
            foreach ($modelImages as $modelImage) {
                $newImage = FileService::saveFile($modelImage, 'images/', 'images');
                $images_ids[] = $newImage->id;
            }
        }

        // Store files
        $modelFiles = $request->file('models');
        if (!is_null($modelFiles)) {
            foreach ($modelFiles as $modelFile) {
                $newFile = FileService::saveFile($modelFile, 'models/', 'models');
                $models_ids[] = $newFile->id;
            }
        }


        // Attach files to M:N table
        if (count($images_ids) > 0) {
            $printModel->files()->attach($images_ids, ['type' => 'image']);
        }
        if (count($models_ids) > 0) {
            $printModel->files()->attach($models_ids, ['type' => 'file']);
        }
        // Send successful response
        return redirect()->back()->with('success', 'úspešne vytvorený');
    }


    /**
     * Update main image
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrintModel $printModel, File $file)
    {
        $mainImage = $printModel->files()->wherePivot('type', '=', 'main_image')->get()->first();

        $printModel->files()->updateExistingPivot($mainImage->id, ['type' => 'image']);
        $printModel->files()->updateExistingPivot($file->id, ['type' => 'main_image']);

        // Send successful response
        return redirect()->back()->with('success_change_main_image', 'úspešne vytvorený');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrintModel $printModel, File $file)
    {
        $printModel->files()->detach($file->id);
        FileService::deleteFile($file);
        // Send successful response
        return redirect()->back()->with('success_delete_image', 'úspešne vytvorený');
    }
}
