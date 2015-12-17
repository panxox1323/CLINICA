<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => '', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        $adminRole = Role::create([
            'name' => 'Secretaria',
            'slug' => 'secretaria',
            'description' => '', // optional
            'level' => 2, // optional, set to 1 by default
        ]);
        $adminRole = Role::create([
            'name' => 'Especialista',
            'slug' => 'especialista',
            'description' => '', // optional
            'level' => 3, // optional, set to 1 by default
        ]);
        $adminRole = Role::create([
            'name' => 'Usuario',
            'slug' => 'usuario',
            'description' => '', // optional
            'level' => 4, // optional, set to 1 by default
        ]);


    }
}
