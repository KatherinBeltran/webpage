<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pae
 *
 * @property $id
 * @property $institucion
 * @property $sede
 * @property $mes
 * @property $registro
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pae extends Model
{
  protected $table = 'pae';
    
    static $rules = [
		'institucion' => 'required',
		'sede' => 'required',
		'mes' => 'required',
		'registro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['institucion','sede','mes','registro'];



}
