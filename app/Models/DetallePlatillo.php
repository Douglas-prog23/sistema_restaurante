<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePlatillo
 *
 * @property $id
 * @property $id_platillo
 * @property $id_ingrediente
 * @property $mano_obra
 * @property $total
 * @property $precio_venta
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingrediente $ingrediente
 * @property Platillo $platillo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallePlatillo extends Model
{
    
    static $rules = [
		'id_platillo' => 'required',
		'mano_obra' => 'required',
		'total' => 'required',
		'precio_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_platillo','id_ingrediente','mano_obra','total','precio_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingrediente()
    {
        return $this->hasOne('App\Models\Ingrediente', 'id', 'id_ingrediente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function platillo()
    {
        return $this->hasOne('App\Models\Platillo', 'id', 'id_platillo');
    }
    

}
