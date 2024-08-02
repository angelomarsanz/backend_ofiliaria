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
        Schema::create('garantias', function (Blueprint $table) {
            $table->id();
            $table->string('aseguradora');
            $table->integer('id_propiedad');
            $table->string('nombre_propiedad', length: 255);
            $table->string('direccion_propiedad', length: 255);
            $table->string('tipo_propiedad', length: 255);
            $table->string('moneda_propiedad', length: 255);
            $table->decimal('costo_alquiler', total: 16, places: 2);
            $table->string('persona', length: 255);
            $table->string('nombres_arrendatario', length: 255);
            $table->string('apellidos_arrendatario', length: 255);
            $table->string('email_arrendatario', length: 255);
            $table->string('telefono_arrendatario', length: 255);
            $table->decimal('monto_ingreso', total: 16, places: 2);
            $table->string('ingreso', length: 255);
            $table->string('sueldo', length: 255);
            $table->text('identidad');
            $table->text('rec_sueldo');
            $table->integer('contador_rec_sueldo');
            $table->text('dgi');
            $table->integer('contador_dgi');
            $table->string('estatus_garantia', length: 255);
            $table->string('estatus_registro', length: 255);
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garantias');
    }
};
