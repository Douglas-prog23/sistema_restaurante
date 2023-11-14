<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Platillo[] $platillos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
  public static function storeRules()
  {
      return [
          'nombre' => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:20|unique:categorias',
          'descripcion' => 'required|regex:/^[\pL\s\-]+$/u|min:20|max:200|',
      ];
  }
  
  public static function updateRules($id)
  {
      return [
          'nombre' => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:20|unique:categorias,nombre,' . $id,
          'descripcion' => 'required|regex:/^[\pL\s\-]+$/u|min:20|max:200|',
      ];
  }
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function platillos()
    {
        return $this->hasMany('App\Models\Platillo', 'categoria', 'id');
        // return $this->hasMany(Platillo::class);
    }
    

}
