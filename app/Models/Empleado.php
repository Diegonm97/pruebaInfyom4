<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleado
 * @package App\Models
 * @version March 12, 2019, 9:21 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 * @property string nuip
 * @property string telefono
 * @property string direccion
 */
class Empleado extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellidos',
        'nuip',
        'telefono',
        'direccion'
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
        'telefono' => 'string',
        'direccion' => 'string'
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
        'telefono' => 'required',
        'direccion' => 'required'
    ];

    
}
