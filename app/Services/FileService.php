use Illuminate\Support\Facades\Log;
        $fileName = generateRandomString(25) . '.' . $file->getClientOriginalExtension();
        $fileData['source_path'] = $pathPrefix . $file->storeAs($path, $fileName, ['disk' => $diskName]);
        if (is_array(getimagesize(Storage::path($fileData['source_path'])))) {
            self::createThumbnail($pathPrefix . $path . "/", $fileName);
        }