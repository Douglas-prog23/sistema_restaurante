<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingrediente
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallePlatillo[] $detallePlatillos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingrediente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','precio','stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePlatillos()
    {
        return $this->hasMany('App\Models\DetallePlatillo', 'id_ingrediente', 'id');
    }
    

}
