<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = \Permission::create([
            'name' => 'Secretaria',
            'slug' => 'secretaria',
            'description' => '', // optional
            'level' => 2, // optional, set to 1 by default
        ]);
    }
}
