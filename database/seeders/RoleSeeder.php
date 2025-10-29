<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // <-- AÑADE ESTA LÍNEA

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definir roles
        $roles =[
            'pacient',
            'Doctor',
            'Recepcionista',
            'Administrador',
            
        ];
        //Crear roles
        foreach ($roles as $role){
            Role::create([
                'name' => $role,
            ]);
        }
    }
}
