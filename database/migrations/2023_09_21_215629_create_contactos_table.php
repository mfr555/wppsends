<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->integer('cel')->unique();

            $table->string('tratamiento')->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->enum('sexo', ['Masculino', 'Femenino'])->nullable();
            $table->string('comentarios')->default('');
            $table->string('email')->nullable();
            $table->boolean('lista_negra')->default(0);

            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            $table->unsignedBigInteger('origen_id')->nullable();
            $table->foreign('origen_id')->references('id')->on('origens');

            $table->unsignedBigInteger('unidad_mv_id')->nullable();
            $table->foreign('unidad_mv_id')->references('id')->on('unidades_mv');

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
        Schema::dropIfExists('contactos');
    }
};
