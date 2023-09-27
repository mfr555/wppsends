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
        Schema::create('comunicacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('texto', 1024);
            $table->string('medio')->default('WhatsApp');
            $table->date('fecha');
            $table->boolean('activa')->default(1);

            $table->unsignedBigInteger('tematica1_id')->nullable();
            $table->unsignedBigInteger('tematica2_id')->nullable();
            $table->unsignedBigInteger('tematica3_id')->nullable();
            $table->foreign('tematica1_id')->references('id')->on('tematicas');
            $table->foreign('tematica2_id')->references('id')->on('tematicas');
            $table->foreign('tematica3_id')->references('id')->on('tematicas');

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
        Schema::dropIfExists('comunicacions');
    }
};
