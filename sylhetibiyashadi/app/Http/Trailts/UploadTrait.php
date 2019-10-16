<?php


namespace App\Http\Trailts;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

Trait UploadTrait
{
    public function uploadOne($uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}
