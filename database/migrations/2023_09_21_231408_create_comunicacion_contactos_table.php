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
        Schema::create('comunicacion_contactos', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('contacto_id');
            $table->unsignedBigInteger('comunicacion_id');
            $table->enum('recepcion', ['Enviado', 'Recibido', 'Respondido', 'Error'])->nullable();
            $table->string('respuesta_resumida')->nullable();
            $table->smallInteger('respuesta_valoracion')->default('0');

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('contacto_id')->references('id')->on('contactos');
            $table->foreign('comunicacion_id')->references('id')->on('comunicacions');

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
        Schema::dropIfExists('comunicacion_contactos');
    }
};
