<?php

namespace App\Services;

class UploadImgService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function upload($img_file, $path = 'uploads', $img_name = null)
    {

        // Makes directory if it is not available
        if (! is_dir(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }

        // Creates image name
        if ($img_name != null) {
            $imgName = $img_name.'.'.$img_file->getClientOriginalExtension();
        } else {
            $imgName = time().'.'.$img_file->getClientOriginalExtension();
        }

        // Moves image to directory and creates full path
        $img_file->move(public_path($path), $imgName);
        $img_full_path = $path."/".$imgName;

        // Returns the full path
        return $img_full_path;
    }
}
