<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa
 * @package App\Models
 * @version March 12, 2019, 9:18 pm UTC
 *
 * @property string nitonuip
 * @property string nombre
 * @property string nombre_contacto
 * @property string telefono_contacto
 * @property string email_contacto
 * @property string estado
 * @property string direccion
 */
class Empresa extends Model
{
    use SoftDeletes;

    public $table = 'empresas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nitonuip',
        'nombre',
        'nombre_contacto',
        'telefono_contacto',
        'email_contacto',
        'estado',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nitonuip' => 'string',
        'nombre' => 'string',
        'nombre_contacto' => 'string',
        'telefono_contacto' => 'string',
        'email_contacto' => 'string',
        'estado' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nitonuip' => 'required',
        'nombre' => 'required',
        'nombre_contacto' => 'required',
        'telefono_contacto' => 'required',
        'email_contacto' => 'required',
        'estado' => 'required',
        'direccion' => 'email'
    ];

    
}
