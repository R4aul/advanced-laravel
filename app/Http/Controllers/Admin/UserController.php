<?php

namespace App\Http\Controllers\Admin;

use App\Dto\UserFilterDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Service\UserService;

class UserController extends Controller
{
    
    public function __construct(
        protected UserService $service
    ) { }

    public function index(){
        $filter = new UserFilterDTO(
            name: request('name')
        );
        $users = $this->service->all($filter);
        return view('admin.user.index', compact('users'));
    }

    public function create(){
        return view('admin.user.create');
    }

    public function store(StoreUserRequest $request){
        $this->service->create($request->validated());
        return redirect()->route('admin.users.index');
    }

    public function edit(string $id){
        $user = $this->service->getById($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(string $id, UpdateUserRequest $request){
        $this->service->update($id, $request->validated());
        return redirect()->route('admin.users.index');
    }
}
