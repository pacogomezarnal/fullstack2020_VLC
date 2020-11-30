<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendaProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienda_proveedor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('tienda_id')->constrained('tiendas');
            $table->foreignId('proveedor_id')->constrained('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tienda_proveedor');
    }
}
