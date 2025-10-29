<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Llamar a RoleSeeder
        $this->call([
            RoleSeeder::class
        ]);
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jose Adrian',
            'email' => 'joseadmin@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
