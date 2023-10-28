<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->name='Levi Jonatan';
        $user1->lastname='Mendoza Herrera';
        $user1->email='levimendoza1999@gmail.com';
        $user1->username='levi1405';
        $user1->password='mendoza123';
        $user1->telephone='72353829';
        $user1->id_rol=1;
        $user1->save();
    }
}
