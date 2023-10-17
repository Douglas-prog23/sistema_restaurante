<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservacione
 *
 * @property $id
 * @property $id_cliente
 * @property $id_mesa
 * @property $fecha
 * @property $num_personas
 * @property $comentario
 * @property $time_estimado
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Mesa $mesa
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservacione extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'id_mesa' => 'required',
		'fecha' => 'required',
		'num_personas' => 'required',
		'comentario' => 'required',
		'time_estimado' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_mesa','fecha','num_personas','comentario','time_estimado','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mesa()
    {
        return $this->hasOne('App\Models\Mesa', 'id', 'id_mesa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_cliente');
    }
    

}
