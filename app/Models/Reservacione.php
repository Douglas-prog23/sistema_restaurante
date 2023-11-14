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
    public static function storeRules()
  {
      return [
        'id_cliente' => 'required',
		'id_mesa' => 'required',
		'fecha' => 'required|date|after_or_equal:today',
		'num_personas' => 'required|integer|min:1|max:10',
		'ocasion' => 'required',
		'comentario' => 'nullable|string',
		'hora' => 'required|date_format:H:i|after_or_equal:08:00|before:20:00',
		'estado' => 'required',
      ];
  }
  
  public static function updateRules()
  {
      return [
        'id_cliente' => 'required',
		'id_mesa' => 'required',
		'fecha' => 'required|date',
		'num_personas' => 'required|integer|min:1|max:10',
		'ocasion' => 'required',
		'comentario' => 'nullable|string',
		'hora' => 'required|date_format:H:i|after_or_equal:08:00|before:20:00',
		'estado' => 'required',
      ];
  }
    
    static $rules = [
		'id_cliente' => 'required',
		'id_mesa' => 'nullable',
		'fecha' => 'required|date|after_or_equal:today',
		'num_personas' => 'required|integer|min:1|max:10',
		'ocasion' => 'required',
		'comentario' => 'nullable|string',
		'hora' => 'required|date_format:H:i|after_or_equal:08:00|before:20:00',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_mesa','fecha','num_personas','ocasion','comentario','hora','estado'];


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
        return $this->hasOne('App\Models\User', 'id', 'id_cliente');
    }
    

}
