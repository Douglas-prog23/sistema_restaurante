<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Platillo
 *
 * @property $id
 * @property $nombre
 * @property $categoria
 * @property $precio
 * @property $estado
 * @property $stock
 * @property $imagen
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property DetallePedido[] $detallePedidos
 * @property DetallePlatillo[] $detallePlatillos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Platillo extends Model
{
    // static $rules = [
	// 	'nombre' => 'required',
	// 	'categoria' => 'required',
	// 	'precio' => 'required',
	// 	'estado' => 'required',
	// 	'stock' => 'required',
	// 	'imagen' => 'required',
    // ];
    public static function storeRules()
    {
        return [
            'nombre' => 'required|unique:platillos,nombre',
		'categoria' => 'required',
		'precio' => 'required',
		'estado' => 'required',
		'stock' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
        ];
    }
    public static function updateRules($id)
    {
        return [
            'nombre' => 'required|unique:platillos,nombre,' . $id,
            'categoria' => 'required',
            'precio' => 'required',
            'estado' => 'required',
            'stock' => 'required',
            'imagen' => 'sometimes|image', // La imagen es opcional, pero si se envía, debe ser una imagen válida
            'descripcion' => 'required',
        ];
    }

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','categoria','precio','estado','stock','imagen','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categorias()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria');
    }
    
    public function category(){
        return $this->belongsTo('App\Models\Categoria', 'categoria','id');
        // return $this->belongsTo(Categoria::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePedidos()
    {
        return $this->hasMany('App\Models\DetallePedido', 'id_platillo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePlatillos()
    {
        return $this->hasMany('App\Models\DetallePlatillo', 'id_platillo', 'id');
    }
    

}
