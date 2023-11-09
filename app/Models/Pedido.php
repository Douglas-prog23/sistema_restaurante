<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $met_pago
 * @property $id_cliente
 * @property $fecha
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallePedido[] $detallePedidos
 * @property Factura[] $facturas
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'id_cliente' => 'required|exists:users,id',
		'total' => 'required',
		'estado' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','id_cliente','total','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePedidos()
    {
        return $this->hasMany('App\Models\DetallePedido', 'id_pedido', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'id_pedido', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_cliente');
    }
    

}
