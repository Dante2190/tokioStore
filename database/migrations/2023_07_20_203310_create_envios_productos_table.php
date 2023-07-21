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
        Schema::create('envios_productos', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('usuario_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('venta_id')->unsigned();
            $table->integer('cantidad');
            $table->string('direccion');
            $table->timestamp('fecha_envio')->nullable();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('venta_id')->references('id')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios_productos');
    }
};
