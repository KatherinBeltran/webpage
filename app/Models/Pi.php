<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pi
 *
 * @property $id
 * @property $indicador_de_bienestar
 * @property $consecutivo_de_la_meta
 * @property $meta
 * @property $entidad_responsable
 * @property $indicador
 * @property $tipo_de_meta
 * @property $total_compromisos_2023
 * @property $total_obligaciones
 * @property $eficiencia_2023_avance_financiero_2023
 * @property $efectividad_2023
 * @property $eficiencia_acumulada_avance_fisico
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pi extends Model
{
	protected $table = 'pi';
    
    static $rules = [
		'indicador_de_bienestar' => 'required',
		'consecutivo_de_la_meta' => 'required',
		'meta' => 'required',
		'entidad_responsable' => 'required',
		'indicador' => 'required',
		'tipo_de_meta' => 'required',
		'total_compromisos_2023' => 'required',
		'total_obligaciones' => 'required',
		'eficiencia_2023_avance_financiero_2023' => 'required',
		'efectividad_2023' => 'required',
		'eficiencia_acumulada_avance_fisico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['indicador_de_bienestar','consecutivo_de_la_meta','meta','entidad_responsable','indicador','tipo_de_meta','total_compromisos_2023','total_obligaciones','eficiencia_2023_avance_financiero_2023','efectividad_2023','eficiencia_acumulada_avance_fisico'];



}