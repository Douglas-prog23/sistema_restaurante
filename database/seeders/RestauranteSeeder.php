<?php

namespace Database\Seeders;

use App\Models\Restaurante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurant = new Restaurante;
        $restaurant->nombre='La cúpula Gourmet';
        $restaurant->cod_restaurante='RES34G0T12';
        $restaurant->slogan='Descubre el placer de la alta cocina, sabores en lo mas alto';
        $restaurant->telefono=798443819;
        $restaurant->direccion='23 Avenida San Martín, San Salvador, El Salvador';
        $restaurant->email='cupulagourmet@gmail.com';
        $restaurant->save();
    }
}
