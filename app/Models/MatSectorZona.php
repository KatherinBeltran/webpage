<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MatSectorZona
 *
 * @property $id
 * @property $entidad
 * @property $grado
 * @property $año
 * @property $sector
 * @property $urbano
 * @property $rural
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MatSectorZona extends Model
{
  protected $table = 'mat_sector_zona';
    
    static $rules = [
		'entidad' => 'required',
		'grado' => 'required',
		'año' => 'required',
		'sector' => 'required',
		'urbano' => 'required',
		'rural' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entidad','grado','año','sector','urbano','rural'];



}