<?php

namespace App\Dto;

class StudentFilterDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly ?string $search,
    )
    {
        //
    }
}
