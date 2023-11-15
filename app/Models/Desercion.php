<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Desercion
 *
 * @property $id
 * @property $nombre_etc
 * @property $año
 * @property $desercion_transicion
 * @property $desercion_primaria
 * @property $desercion_secundaria
 * @property $desercion_media
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Desercion extends Model
{
  protected $table = 'desercion';
    
    static $rules = [
		'nombre_etc' => 'required',
		'año' => 'required',
		'desercion_transicion' => 'required',
		'desercion_primaria' => 'required',
		'desercion_secundaria' => 'required',
		'desercion_media' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_etc','año','desercion_transicion','desercion_primaria','desercion_secundaria','desercion_media'];



}
