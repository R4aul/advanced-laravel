<?php

namespace App\Service;

use App\Dto\UserFilterDTO;
use App\Interface\UserRespositoryInterface;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * clase que gestiona operaciones de usuarios
 */
class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected UserRespositoryInterface $repository,
    ) {}
    
    /**
     * Obtiene usuarios paginados
     * 
     * @param UserFilterDTO $filter objeto para filtrar el usuarios
     * @return LengthAwarePaginator retorna usuario paginados
     */
    public function all(UserFilterDTO $filter)
    {
        return $this->repository->all($filter);
    }

    /**
     * Obtiene un usuario por su id
     * 
     * @param string $id Identificador unico del estudiante
     * @return User retorna el usuario o null si no existe 
     */
    public function getById(string $id)
    {
        $user = $this->repository->getById($id);
        if (!$user) {
            abort(404,'User not foud');
        }
        return $user;
    }

    /**
     * Crea usuario
     * @param array $data array que contiene los datos.
     * @return int retorna el identificador del usuario creado
     */
    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    /**
     * @param string $id idientificador del usuario.
     * @param array $data array de datos validados.
     * @return int retorna el identificador del usuario actualizado.
     */
    public function update(string $id, array $data)
    {
        $user = $this->repository->update($id, $data);
        if (!$user) {
            abort(404,"User not found"); 
        }
        return $user;
    }

}
