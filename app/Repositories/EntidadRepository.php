<?php

namespace App\Repositories;

use App\Models\Entidad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EntidadRepository
 * @package App\Repositories
 * @version March 12, 2019, 9:22 pm UTC
 *
 * @method Entidad findWithoutFail($id, $columns = ['*'])
 * @method Entidad find($id, $columns = ['*'])
 * @method Entidad first($columns = ['*'])
*/
class EntidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'telefono',
        'direccion',
        'tipo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Entidad::class;
    }
}
