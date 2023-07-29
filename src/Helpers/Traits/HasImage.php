<?php

namespace Helpers\Traits;

trait HasImage
{
    public function getOriginalImageAttribute(): string|null
    {
        return$this->firstMedia('original')?->getUrl();
    }

    public function getCroppedImageAttribute(): string|null
    {
        return$this->firstMedia('cropped')?->getUrl();
    }
}
