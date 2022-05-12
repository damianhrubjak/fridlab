<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddImageRequest;
use App\Models\File;
use App\Services\FileService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Nette\Utils\FileSystem;

class FileController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddImageRequest $request)
    {
        $newFile = FileService::saveFile($request->file('image'), 'images/', 'images');

        // Send back URL with uploaded image
        return response()->json(['url' => route('file-thumbnail-serve', $newFile->slug)]);
    }

    /**
     * Serve the specified resource for URL.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function serveForUrl(File $file)
    {
        return FileService::serveForUrl($file);
    }

    /**
     * Serve the specified resource for URL.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function serveThumbnailForUrl(File $file)
    {
        return FileService::serveThumbnailForUrl($file);
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
}
