<?php

namespace Helpers;

use Helpers\TableName;
use Illuminate\Database\Schema\Blueprint;

trait WhoWhen
{
    public function whoWhenSoftDelete(Blueprint $table): void
    {
        $table->foreignId('createdBy')->nullable();
        $table->foreign('createdBy')->references('id')->on(TableName::user());

        $table->foreignId('updatedBy')->nullable();
        $table->foreign('updatedBy')->references('id')->on(TableName::user());

        $table->softDeletes('deletedAt');

        $table->dateTime('createdAt')->nullable();
        $table->dateTime('updatedAt')->nullable();
    }
}
