<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extraedad
 *
 * @property $id
 * @property $entidad
 * @property $grado
 * @property $edad
 * @property $matricula
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Extraedad extends Model
{
  protected $table = 'extraedad';
    
    static $rules = [
		'entidad' => 'required',
		'grado' => 'required',
		'edad' => 'required',
		'matricula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','grado','edad','matricula'];



}
