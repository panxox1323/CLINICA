<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->insert(array(
            'first_name'         => 'Francisco',
            'last_name'          => 'Inostroza',
            'email'              => 'francisco.inostroza@virginiogomez.cl',
            'password'           => bcrypt('123456'),
            'type'               => 'admin',
            'run'                => '15.696.727-0',
            'fecha_nacimiento'   => '1983-05-31',
            'telefono'           => '93509086',
            'saldo'              => '0',
            'direccion'          => 'Dr. Mario Mujica #189',
            'ciudad'             => 'Parral',

        ));

        \DB::table('horas')->insert(array(

            'hora'    => '09:00',

        ));
        \DB::table('horas')->insert(array(

            'hora'    => '09:30',

        ));
        \DB::table('horas')->insert(array(

            'hora'    => '10:00',
        ));


    }
}
