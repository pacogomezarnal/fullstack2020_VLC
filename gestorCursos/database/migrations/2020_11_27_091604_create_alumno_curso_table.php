<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_curso', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Relacion entre tablas
            $table->foreignId('curso_id')->constrained('cursos');
            $table->foreignId('alumno_id')->constrained('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_curso');
    }
}
