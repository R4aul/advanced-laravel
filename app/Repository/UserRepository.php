<?php

namespace App\Repository;

use App\Dto\UserFilterDTO;
use App\Interface\UserRespositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRespositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function all(UserFilterDTO $filter)
    {
        $users = User::with(['teacher'])
            ->filter($filter)
            ->paginate(12);

        return $users;
    }

    public function getById(string $id) : ?User
    {
        $user = User::with(['teacher'])
            ->where('id',$id)
            ->first();
        
        return $user;
    }

    public function create(array $data)
    {
        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);

        $user->teacher()->create([
            'specialty'=>$data['specialty'],
            'hire_date'=>$data['hire_date']
        ]);

        return $user;
    }

    public function update(string $id, array $data)
    {

        $user = User::find($id);

        $user->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
        ]);

        $user->teacher()->update([
            'specialty'=>$data['specialty'],
            'hire_date'=>$data['hire_date']
        ]);

        return $user;
    }

}
