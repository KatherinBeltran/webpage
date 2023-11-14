<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstVenezolano
 *
 * @property $id
 * @property $entidad
 * @property $grado
 * @property $año
 * @property $oficial
 * @property $contratada
 * @property $privada
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstVenezolano extends Model
{
    
    static $rules = [
		'entidad' => 'required',
		'grado' => 'required',
		'año' => 'required',
		'oficial' => 'required',
		'contratada' => 'required',
		'privada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','grado','año','oficial','contratada','privada'];



}