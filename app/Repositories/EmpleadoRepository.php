<?php

namespace App\Repositories;

use App\Models\Empleado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmpleadoRepository
 * @package App\Repositories
 * @version March 12, 2019, 9:21 pm UTC
 *
 * @method Empleado findWithoutFail($id, $columns = ['*'])
 * @method Empleado find($id, $columns = ['*'])
 * @method Empleado first($columns = ['*'])
*/
class EmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'nuip',
        'telefono',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Empleado::class;
    }
}
