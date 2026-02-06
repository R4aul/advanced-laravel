<?php

namespace App\Interface;

use App\Dto\UserFilterDTO;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CrudUser
{
    
    /**
     * Retorna usuario paginados
     * 
     * @param UserFilterDTO atributos de filtro
     * @return LengthAwarePaginator usuarios paginados
     */
    public function all(UserFilterDTO $filter);

    /**
     * Retorna usuario mediante el identificador
     * 
     * @param string $id identificador del usuario.
     * @return User 
     */
    public function getById(string $id) : ?User;

    /**
     * Crea usuario
     * 
     * @param array $data datos validados
     * @return int retorna identificador del usuario creado
     */
    public function create(array $data);

    /**
     * Actualiza un usuario en BD
     * 
     * @param string $id identificador del usuario
     * @param array $data array del datos validados
     * @return int identificador del usuatio actulaizado
     */
    public function update(string $id, array $data);
}
