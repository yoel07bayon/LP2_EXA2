<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('appaterno');
            $table->string('apmaterno');

            $table->string('email');
            $table->string('dni', 8);
            $table->date('fechanacimiento');
            //$table->double('precio', 10, 2);
            $table->boolean('habilitado');
            $table->string('sexo');
            $table->string('estadoCivil');
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
        Schema::dropIfExists('estudiantes');
    }
}
