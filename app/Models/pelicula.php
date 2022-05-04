<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $cantidad
 * @property $Anio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pelicula extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'Anio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','cantidad','Anio'];



}
