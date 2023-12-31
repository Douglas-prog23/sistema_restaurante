<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mesa
 *
 * @property $id
 * @property $num_mesa
 * @property $capacidad_max
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservacione[] $reservaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mesa extends Model
{
  public static function storeRules()
  {
      return [
          'num_mesa' => 'required|unique:mesas,num_mesa',
          'capacidad_max' => 'required',
          'estado' => 'required',
      ];
  }
    public static function updateRules($id)
    {
        return [
            'num_mesa' => 'required|unique:mesas,num_mesa,' . $id,
            'capacidad_max' => 'required',
            'estado' => 'required',
        ];
    }

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_mesa','capacidad_max','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservaciones()
    {
        return $this->hasMany('App\Models\Reservacione', 'id_mesa', 'id');
    }
    

}
