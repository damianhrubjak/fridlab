<?php

namespace App\Services;

use App\Http\Requests\AddImageRequest;
use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\Types\Self_;

class FileService
{
    public static function saveFile(UploadedFile $file, $pathPrefix, $diskName)
    {
        $path = generateRandomString(15);

        $fileData['file_name'] = $file->getClientOriginalName();
        $fileData['size'] = $file->getSize();
        // Store file
        $fileData['source_path'] = $pathPrefix . $file->store($path, ['disk' => $diskName]);

        // get path and folder
        self::createThumbnail($pathPrefix . $path . "/", $file->hashName());

        // Store data to DB
        $newFile = File::create($fileData);

        // Send back new file model
        return $newFile;
    }

    /**
     * Serve the specified resource for URL.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public static function serveForUrl(File $file)
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
    public static function serveThumbnailForUrl(File $file)
    {
        $pathData = self::getDataFromFileName($file->source_path);
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
    public static function createThumbnail($folder, $filename)
    {
        $source = Storage::path($folder . $filename);
        $dest = Storage::path($folder . 'thumbnail_' . $filename);

        Image::make($source)->resize(1000, 562.5, function ($constraint) {
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
    public static function deleteFile(File $file)
    {
        //
    }

    private static function getDataFromFileName($fileNameWithFolderPath)
    {
        $nameOfFile = basename($fileNameWithFolderPath);
        return [
            'file_name' => $nameOfFile,
            'folder_name' => str_replace($nameOfFile, "", $fileNameWithFolderPath),
            'storage_path' => Storage::path($fileNameWithFolderPath)
        ];
    }
}
