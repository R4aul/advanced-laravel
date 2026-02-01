<?php

namespace App\Interface;

use App\Dto\StudentFilterDTO;

interface CrudStudent
{
    public function all(StudentFilterDTO $filter);
    public function getById(string $id);
    public function create(array $data);
    public function update(string $id, array $data);
}
