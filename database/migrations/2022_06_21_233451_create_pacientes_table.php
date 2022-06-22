<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('tipoDocumento', 30);
            $table->string('documento', 50);
            $table->string('nombres', 80);
            $table->string('apellidos', 80);
            $table->string('fechaNacimiento', 50);
            $table->string('genero', 10);
            $table->string('estadoCivil', 20);
            $table->string('direccion', 80);
            $table->string('telefono', 50);
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
        Schema::dropIfExists('pacientes');
    }
}
