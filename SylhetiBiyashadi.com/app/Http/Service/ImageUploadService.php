<?php


namespace App\Http\Service;


class ImageUploadService
{
    public function __construct()
    {
        ;
    }

    public function upload($image)
    {
        $imageName = time().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('images'), $imageName);

        return $imageName;
    }
}
