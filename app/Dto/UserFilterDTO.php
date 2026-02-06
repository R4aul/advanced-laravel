<?php

namespace App\Dto;

class UserFilterDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly ?string $name
    )
    {
        //
    }
}
