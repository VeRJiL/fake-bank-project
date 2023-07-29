<?php

namespace Helpers;

use Domain\User\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait Blamer
{
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'createdBy');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updatedBy');
    }
}
