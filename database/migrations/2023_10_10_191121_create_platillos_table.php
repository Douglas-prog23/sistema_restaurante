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
        Schema::create('platillos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->bigInteger('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->double('precio');
            $table->boolean('estado');
            $table->integer('stock');
            $table->string('imagen');
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platillos');
    }
};
