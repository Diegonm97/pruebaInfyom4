<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version March 12, 2019, 9:20 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 * @property string nuip
 * @property string tipo_cliente
 * @property string direccion
 * @property string salario
 * @property string entidad
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellidos',
        'nuip',
        'tipo_cliente',
        'direccion',
        'salario',
        'entidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellidos' => 'string',
        'nuip' => 'string',
        'tipo_cliente' => 'string',
        'direccion' => 'string',
        'salario' => 'string',
        'entidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'nuip' => 'required',
        'tipo_cliente' => 'required',
        'direccion' => 'required',
        'salario' => 'required',
        'entidad' => 'required'
    ];

    

    
}
