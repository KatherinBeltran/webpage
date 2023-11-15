<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FueSistema
 *
 * @property $id
 * @property $entidad
 * @property $sector
 * @property $año
 * @property $desercion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FueSistema extends Model
{
  protected $table = 'fue_sistema';
    
    static $rules = [
		'entidad' => 'required',
		'sector' => 'required',
		'año' => 'required',
		'desercion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','sector','año','desercion'];



}
