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

        $user2 = new User;
        $user2->name='Carlos Javier';
        $user2->lastname='Pereira Santaolalla';
        $user2->email='javipere@gmail.com';
        $user2->username='javi23';
        $user2->password='pereira123';
        $user2->telephone='75453021';
        $user2->id_rol=2;
        $user2->save();

        $user3 = new User;
        $user3->name='Neil deGrasse';
        $user3->lastname='Tyson';
        $user3->email='tyson31@gmail.com';
        $user3->username='neil201';
        $user3->password='tyson123';
        $user3->telephone='74392394';
        $user3->id_rol=3;
        $user3->save();
    }
}
