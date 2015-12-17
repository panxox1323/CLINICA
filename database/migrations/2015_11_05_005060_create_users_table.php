<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id')->unique();
            $table->string('run');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->integer('saldo')->nullable();
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->string('ciudad');
            $table->string('password', 60);
            $table->enum('type', ['admin', 'user','especialista','secretaria']);

            $table->boolean('estado')->default(1);

            $table->integer('id_especialidad')->unsigned()->nullable();
            $table->foreign('id_especialidad')
                ->references('id')
                ->on('especialidades')
                ->onDelete('cascade');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
