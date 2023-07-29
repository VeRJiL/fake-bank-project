<?php

namespace Helpers\Traits;

use Illuminate\Database\Eloquent\Model;

trait ProductHelper
{
    protected function syncProducts(Model $entity, array $productsIds): void
    {
        $entity->products()->sync($productsIds);
    }
}
