<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Eficiencium
 *
 * @property $id
 * @property $nombre_etc
 * @property $año
 * @property $sector
 * @property $aprobado
 * @property $desertor
 * @property $reprobado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Eficiencium extends Model
{
    
    static $rules = [
		'nombre_etc' => 'required',
		'año' => 'required',
		'sector' => 'required',
		'aprobado' => 'required',
		'desertor' => 'required',
		'reprobado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_etc','año','sector','aprobado','desertor','reprobado'];



}
