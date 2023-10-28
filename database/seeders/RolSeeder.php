<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre'=>'Administrador',
            'descripcion'=>'Gestor total del sistema',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Empleado',
            'descripcion'=>'Gestor de areas funcionales del sistema',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Cliente',
            'descripcion'=>'Persona a quien se le da el servicio',
            'created_at'=>Carbon::now()
        ]);

        DB::table('roles')->insert($data);
    }
}
