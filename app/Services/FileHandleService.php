<?php

namespace App\Services;

use DB;
use Directory;
use Illuminate\Support\Facades\File;

/**
 * Class FileHandleService.
 */
class FileHandleService
{
    public static string $storage_space;

    public static function getImageStorage()
    {

        $storage = DB::table('image_space')->first();

        if ($storage->aws == 1) {
            self::$storage_space = "s3.aws";
        } else if ($storage->digital_ocean == 1) {
            self::$storage_space = "s3.digitalocean";
        } else {
            self::$storage_space = "same_server";
        }

        if (self::$storage_space != "same_server") {
            $url_aws = rtrim(Storage::disk(self::$storage_space)->url('/'), "/");
        } else {
            $url_aws = url('/');
        }

        return $url_aws;
    }
    public static function uploadImageInPublicPath($image, $path)
    {
        $extension = $image->getClientOriginalExtension();
        $publicPath = public_path($path);
        if (!file_exists($publicPath)) {
            mkdir($publicPath, 0777, true);
        }
        $photo = time() . "." . $extension;
        $image->move($publicPath, $photo);

        return $path . "/" . $photo;
    }
}
