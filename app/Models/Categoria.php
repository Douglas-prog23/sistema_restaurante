<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $slug
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Platillo[] $platillos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'slug' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','slug','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function platillos()
    {
        return $this->hasMany('App\Models\Platillo', 'categoria', 'id');
    }
    

}
