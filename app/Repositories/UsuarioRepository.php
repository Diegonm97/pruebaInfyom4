<?php

namespace App\Repositories;

use App\Models\Usuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version March 12, 2019, 9:19 pm UTC
 *
 * @method Usuario findWithoutFail($id, $columns = ['*'])
 * @method Usuario find($id, $columns = ['*'])
 * @method Usuario first($columns = ['*'])
*/
class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_empresa',
        'nombre',
        'apellidos',
        'nuip',
        'entidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuario::class;
    }
}
