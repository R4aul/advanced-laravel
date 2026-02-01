<?php

namespace App\Service;

use App\Models\Student;
use App\Repository\StudentRepository;
use App\Dto\StudentFilterDTO;

class StudentService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected StudentRepository $repository
    )
    { }

    public function all(StudentFilterDTO $filter){
        return $this->repository->all($filter);
    }

    public function getById(string $id) : Student{
        $student = $this->repository->getById($id);
        if ($student != null) {
            return $student;
        } 
        abort(404,'Estudiante no encontrado');
    }

    public function create(array $data) : Student{
        return $this->repository->create($data);
    }

    public function update(string $id, array $data){
        $student = $this->repository->update($id, $data);
        if ($student != null) {
            return $student;
        }
        abort(404,'Estudiante no encontrado');
    }

}
