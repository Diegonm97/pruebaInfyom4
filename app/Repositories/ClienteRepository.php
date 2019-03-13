<?php

namespace App\Repositories;

use App\Models\Cliente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version March 12, 2019, 9:20 pm UTC
 *
 * @method Cliente findWithoutFail($id, $columns = ['*'])
 * @method Cliente find($id, $columns = ['*'])
 * @method Cliente first($columns = ['*'])
*/
class ClienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'nuip',
        'tipo_cliente',
        'direccion',
        'salario',
        'entidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cliente::class;
    }
}
