<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Entidad
 * @package App\Models
 * @version March 12, 2019, 9:22 pm UTC
 *
 * @property string nombre
 * @property string telefono
 * @property string direccion
 * @property string tipo
 */
class Entidad extends Model
{
    use SoftDeletes;

    public $table = 'entidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'telefono' => 'required',
        'direccion' => 'required',
        'tipo' => 'required'
    ];

    public function scopeSearch($query) 
	{
   	return $query->select('*');
    }
}
