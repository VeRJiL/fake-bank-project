<?php

namespace Helpers\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Facades\MediaUploader;

trait ImageHelper
{
    protected function syncCroppedImage(Model $entity, $destination, null|string $imageFile = null): void
    {
        if ($imageFile) {
            $media = MediaUploader::fromString($imageFile)
                ->useFilename('cropped')
                ->onDuplicateIncrement()
                ->toDestination('public', $destination)
                ->upload();

            $entity->syncMedia($media, ['cropped']);
        }
    }

    protected function syncOriginalImage(Model $entity, $destination, null|UploadedFile $imageFile = null): void
    {
        if ($imageFile) {
            $media = MediaUploader::fromSource($imageFile)
                ->onDuplicateIncrement()
                ->toDestination('public', $destination)
                ->upload();

            $entity->syncMedia($media, ['original']);
        }
    }
}
