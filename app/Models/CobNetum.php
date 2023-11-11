<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CobNetum
 *
 * @property $id
 * @property $nombre_etc
 * @property $año
 * @property $cobertura_neta_transicion
 * @property $cobertura_neta_primaria
 * @property $cobertura_neta_secundaria
 * @property $cobertura_neta_media
 * @property $cobertura_neta_basica
 * @property $cobertura_neta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CobNetum extends Model
{
    
    static $rules = [
		'nombre_etc' => 'required',
		'año' => 'required',
		'cobertura_neta_transicion' => 'required',
		'cobertura_neta_primaria' => 'required',
		'cobertura_neta_secundaria' => 'required',
		'cobertura_neta_media' => 'required',
		'cobertura_neta_basica' => 'required',
		'cobertura_neta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_etc','año','cobertura_neta_transicion','cobertura_neta_primaria','cobertura_neta_secundaria','cobertura_neta_media','cobertura_neta_basica','cobertura_neta'];



}