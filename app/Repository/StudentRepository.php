<?php

namespace App\Repository;

use App\Interface\StudentRepositoryInterface;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use App\Dto\StudentFilterDTO;

class StudentRepository implements StudentRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function all(StudentFilterDTO $filter)
    {
        return Student::with(['profile'])
            ->filter($filter)
            ->paginate(10);
    }

    public function getById(string $id) : Student
    {
        return Student::with(['profile'])
            ->where('id', $id)->first();
    }

    public function create(array $data) : Student
    {
        $student =  Student::create([
            'name' => $data['name'],
            'matricula' => $data['matricula'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => true,
        ]);

        $student->profile()->create([
            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'birth_date'=>$data['birth_date']
        ]);

        return $student;
    }

    public function update(string $id, array $data)
    {
        $student = Student::where('id', $id)
            ->update([
                'name' => $data['name'],
                'matricula' => $data['matricula'],
                'email' => $data['email'],
            ]);

        $student->profile()->update([
            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'birth_date'=>$data['birth_date']
        ]);

        return $student;
    }
}
