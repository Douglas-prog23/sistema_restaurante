<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $id_cliente
 * @property $id_pedido
 * @property $fecha
 * @property $total
 * @property $num_factura
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido $pedido
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'id_pedido' => 'required',
		'fecha' => 'required',
		'total' => 'required',
		'num_factura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_pedido','fecha','total','num_factura'];


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
    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_cliente');
    }
    

}
