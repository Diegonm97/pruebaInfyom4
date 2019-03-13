<?php

namespace App\Repositories;

use App\Models\Empresa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmpresaRepository
 * @package App\Repositories
 * @version March 12, 2019, 9:18 pm UTC
 *
 * @method Empresa findWithoutFail($id, $columns = ['*'])
 * @method Empresa find($id, $columns = ['*'])
 * @method Empresa first($columns = ['*'])
*/
class EmpresaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nitonuip',
        'nombre',
        'nombre_contacto',
        'telefono_contacto',
        'email_contacto',
        'estado',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Empresa::class;
    }
}
