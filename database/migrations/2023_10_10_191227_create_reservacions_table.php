<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('usuarios');
            $table->bigInteger('id_mesa')->unsigned()->nullable();
            $table->foreign('id_mesa')->references('id')->on('mesas');
            $table->date('fecha');
            $table->integer('num_personas');
            $table->string('ocasion',50);
            $table->time('hora');
            $table->text('comentario');
            $table->string('estado',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
