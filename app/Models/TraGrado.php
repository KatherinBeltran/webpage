<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TraGrado
 *
 * @property $id
 * @property $entidad
 * @property $grado
 * @property $año
 * @property $matricula
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TraGrado extends Model
{
  protected $table = 'tra_grado';
    
    static $rules = [
		'entidad' => 'required',
		'grado' => 'required',
		'año' => 'required',
		'matricula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','grado','año','matricula'];



}
