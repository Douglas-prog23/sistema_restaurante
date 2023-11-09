<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePedido
 *
 * @property $id
 * @property $id_pedido
 * @property $id_platillo
 * @property $cantidad
 * @property $total
 * @property $created_at
 * @property $updated_at
 * @property Pedido $pedido
 * @property Platillo $platillo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallePedido extends Model
{
    
    static $rules = [
		'id_pedido' => 'required',
		'id_platillo' => 'required',
		'cantidad' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pedido','id_platillo','cantidad','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pedido()
    {
        return $this->hasOne('App\Models\Pedido', 'id', 'id_pedido');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function platillo()
    {
        return $this->hasOne('App\Models\Platillo', 'id', 'id_platillo');
    }
    

}
