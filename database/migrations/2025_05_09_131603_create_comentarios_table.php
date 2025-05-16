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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();

            $table->enum('estado_producto', ['Nuevo', 'Poco uso', 'Usado']);
            $table->string('descripcion');
            $table->integer('valoracion');

            $table->foreignId('usuario_id')->contstrained('usuarios');
            $table->foreignId('producto_id')->contstrained('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};