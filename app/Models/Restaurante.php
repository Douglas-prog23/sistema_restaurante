<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurante
 *
 * @property $id
 * @property $nombre
 * @property $cod_restaurante
 * @property $slogan
 * @property $telefono
 * @property $direccion
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Restaurante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cod_restaurante' => 'required',
		'slogan' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cod_restaurante','slogan','telefono','direccion','email'];



}
