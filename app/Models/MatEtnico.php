<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MatEtnico
 *
 * @property $id
 * @property $entidad
 * @property $etnia
 * @property $año
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MatEtnico extends Model
{
    
    static $rules = [
		'entidad' => 'required',
		'etnia' => 'required',
		'año' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','etnia','año','valor'];



}