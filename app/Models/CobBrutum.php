<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CobBrutum
 *
 * @property $id
 * @property $nombre_etc
 * @property $año
 * @property $cobertura_bruta_transicion
 * @property $cobertura_bruta_primaria
 * @property $cobertura_bruta_secundaria
 * @property $cobertura_bruta_media
 * @property $cobertura_bruta_basica
 * @property $cobertura_bruta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CobBrutum extends Model
{
    
    static $rules = [
		'nombre_etc' => 'required',
		'año' => 'required',
		'cobertura_bruta_transicion' => 'required',
		'cobertura_bruta_primaria' => 'required',
		'cobertura_bruta_secundaria' => 'required',
		'cobertura_bruta_media' => 'required',
		'cobertura_bruta_basica' => 'required',
		'cobertura_bruta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_etc','año','cobertura_bruta_transicion','cobertura_bruta_primaria','cobertura_bruta_secundaria','cobertura_bruta_media','cobertura_bruta_basica','cobertura_bruta'];



}