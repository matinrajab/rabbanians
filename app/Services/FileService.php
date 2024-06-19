<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FileService
{
    public function handleFileUpload($file, $dir)
    {
        $image = $this->generateUniqueFileName($file);
        $file->move($dir, $image);

        return $image;
    }

    public function handleFileUpdate($file, $currentImage, $dir)
    {
        if ($file) {
            File::delete($dir . $currentImage);
            $newImageName = $this->generateUniqueFileName($file);
            $file->move($dir, $newImageName);
            return $newImageName;
        }

        return $currentImage;
    }

    public function prepareData($request, $image, $image_column_name = 'image')
    {
        $data = $request->all();
        $data[$image_column_name] = $image;

        return $data;
    }

    private function generateUniqueFileName($file)
    {
        $fileName = Str::random(40);
        $extension = $file->extension();

        return $fileName . '.' . $extension;
    }
}
