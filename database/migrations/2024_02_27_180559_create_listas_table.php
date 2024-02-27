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
        Schema::create('listas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('lema')->default('PARTIDO NACIONAL');
            $table->string('sublema')->nullable();
            $table->string('agrupacion')->default('PLAN PAIS');
            $table->integer('numero');
            $table->enum('estado_del_numero', ['Solicitado', 'Concedido', 'Rechazado', 'Renunciado'])
                    ->default('Solicitado');
            $table->text('notas')->nullable();

            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            //Unicidad en numero intersección departamento_id
            $table->unique(['numero', 'departamento_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listas');
    }
};
