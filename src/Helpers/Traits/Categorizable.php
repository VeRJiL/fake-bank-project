<?php

namespace Helpers\Traits;

use Helpers\TableName;
use Domain\Category\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait Categorizable
{
    public function categories(): BelongsToMany
    {
        return $this->morphToMany(
            Category::class,
            'categorizable',
            TableName::categorizable(),
            'categorizableId',
            'categoryId'
        );
    }
}
