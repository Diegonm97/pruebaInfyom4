<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version March 12, 2019, 9:19 pm UTC
 *
 * @property string id_empresa
 * @property string nombre
 * @property string apellidos
 * @property string nuip
 * @property string entidad
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'usuarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_empresa',
        'nombre',
        'apellidos',
        'nuip',
        'entidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_empresa' => 'string',
        'nombre' => 'string',
        'apellidos' => 'string',
        'nuip' => 'string',
        'entidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empresa' => 'required',
        'nombre' => 'required',
        'apellidos' => 'required',
        'nuip' => 'required',
        'entidad' => 'required'
    ];

    
}
