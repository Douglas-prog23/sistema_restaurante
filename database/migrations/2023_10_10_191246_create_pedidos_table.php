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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique();
            $table->bigInteger('id_cliente')->unsigned();
            $table->string('direccion');
            $table->foreign('id_cliente')->references('id')->on('users');
            $table->decimal('total',7,2);
            // --solo si esta seguro que esas son las que llebara la columna
            $table->enum('estado', ['pendiente', 'procesando', 'enviado', 'entregado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
