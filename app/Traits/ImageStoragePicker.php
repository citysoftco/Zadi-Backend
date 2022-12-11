<?php

namespace App\Traits;

use DB;
use Illuminate\Support\Facades\Storage;

trait ImageStoragePicker {
    protected string $storage_space;

    public function getImageStorage()
    {
        $storage = DB::table('image_space')->first();

        if ($storage->aws == 1) {
            $this->storage_space = "s3.aws";
        } else if ($storage->digital_ocean == 1) {
            $this->storage_space = "s3.digitalocean";
        } else {
            $this->storage_space = "same_server";
        }

        if ($this->storage_space != "same_server") {
            $url_aws = rtrim(Storage::disk($this->storage_space)->url('/'), "/");
        } else {
            $url_aws = url('/');
        }

        return $url_aws;
    }
}
