<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PobDiscapacidad
 *
 * @property $id
 * @property $entidad
 * @property $sector
 * @property $discapacidad
 * @property $matricula
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PobDiscapacidad extends Model
{
  protected $table = 'pob_discapacidad';
    
    static $rules = [
		'entidad' => 'required',
		'sector' => 'required',
		'discapacidad' => 'required',
		'matricula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','sector','discapacidad','matricula'];



}
