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
            $table->increments('id')->unsigned()->unique();
            $table->string('nombre', 100);
            $table->string('descripcion', 255)->nullable();
            $table->string('talla', 10);
            $table->integer('categoria_id')->unsigned();
            $table->integer('departamento_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
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
