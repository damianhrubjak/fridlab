<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Serve the specified resource for URL.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function serveForUrl(File $file)
    {
        $fullPathToFile = Storage::path($file->source_path);

        if (file_exists($fullPathToFile)) {
            return response()->download($fullPathToFile, null, [], null);
        } else {
            return response('File not found.', 404);
        }
    }

    /**
     * Serve the specified resource for URL.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function serveThumbnailForUrl(File $file)
    {
        $pathData = $this->getDataFromFileName($file->source_path);
        $thumbnailPath = Storage::path($pathData['folder_name'] . 'thumbnail_' . $pathData['file_name']);

        if (file_exists($thumbnailPath)) {
            return response()->download($thumbnailPath, null, [], null);
        } else {
            return response('File not found.', 404);
        }
    }

    /**
     * Serve the specified resource for URL.
     *
     * $folder = 'files/seeder-img/';
     * $filename = 'harry-cunningham-L0nLG8t7zho-unsplash.jpg';
     * 
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function createThumbnail($folder, $filename)
    {
        $source = Storage::path($folder . $filename);
        $dest = Storage::path($folder . 'thumbnail_' . $filename);

        Image::make($source)->resize(600, 340, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($dest, 70);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }

    private function getDataFromFileName($fileNameWithFolderPath)
    {
        $nameOfFile = basename($fileNameWithFolderPath);
        return [
            'file_name' => $nameOfFile,
            'folder_name' => str_replace($nameOfFile, "", $fileNameWithFolderPath),
            'storage_path' => Storage::path($fileNameWithFolderPath)
        ];
    }
}
