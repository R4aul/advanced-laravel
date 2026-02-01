<?php

namespace App\Http\Controllers\Admin;

use App\Dto\StudentFilterDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Service\StudentService;

class StudentController extends Controller
{

    public function __construct(
        protected StudentService $service,
    ) { }

    public function index()
    {
        $filter = new StudentFilterDTO(
            search: request('search'),
        );
        $students = $this->service->all($filter);
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(StoreStudentRequest $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('admin.students.index');
    }

    public function edit(string $id){
        $student = $this->service->getById($id);
        return view('admin.students.edit', compact('student'));
    }

    public function update(string $id, UpdateStudentRequest $request){
        $this->service->update($id, $request->validated());
        return redirect()->route('admin.students.index');
    }
}
