<?php

namespace Helpers\Traits;

use Illuminate\Database\Eloquent\Model;

trait CategoryHelper
{
    protected function syncCategories(Model $entity, array $categoryIds)
    {
        $entity->categories()->sync($categoryIds);
    }
}
