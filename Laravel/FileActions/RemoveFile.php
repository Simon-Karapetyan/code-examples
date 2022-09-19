<?php

namespace App\Actions\Common;

use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class RemoveFile
{
    use AsAction;

    public function handle(string $photo_path): void
    {
        if (!empty($photo_path) && Storage::exists($photo_path)) {
            Storage::delete($photo_path);

            $md_photo_path = str_replace(".", '_md.', $photo_path);
            $sm_photo_path = str_replace(".", '_sm.', $photo_path);

            if (Storage::exists($md_photo_path)) {
                Storage::delete($md_photo_path);
            }
            if (Storage::exists($sm_photo_path)) {
                Storage::delete($sm_photo_path);
            }
        }
    }
}
