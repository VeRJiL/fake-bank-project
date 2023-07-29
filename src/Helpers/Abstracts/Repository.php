<?php

namespace Helpers\Abstracts;

abstract class Repository
{
    protected function perPage(int $perPage = null): int
    {
        if ($perPage < 0 || $perPage === 0 || $perPage === '0' || $perPage === null) {
            return 15;
        }

        return $perPage;
    }
}
