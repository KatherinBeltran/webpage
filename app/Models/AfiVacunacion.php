<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AfiVacunacion
 *
 * @property $id
 * @property $indicadores_pts
 * @property $año
 * @property $numerador
 * @property $denominador
 * @property $indicador
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AfiVacunacion extends Model
{
  protected $table = 'afi_vacunacion';
    
    static $rules = [
		'indicadores_pts' => 'required',
		'año' => 'required',
		'indicador' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['indicadores_pts','año','numerador','denominador','indicador'];



}