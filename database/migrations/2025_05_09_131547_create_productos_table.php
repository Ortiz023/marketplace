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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('descripcion');
            $table->string('valor');
            $table->string('imagen');
            $table->boolean('estado')->default(true);
            $table->enum('estado_producto', ['Nuevo', 'Poco Uso', 'Usado']);

            $table->foreignId('categoria_id')->contstrained('categorias');
            $table->foreignId('usuario_id')->contstrained('usuarios');
            $table->foreignId('ciudad_id')->contstrained('ciudades');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};