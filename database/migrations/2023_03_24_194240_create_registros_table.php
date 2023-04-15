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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();

            $table->string('fecha')                  ->nullable();
            $table->string('hora')                   ->nullable();

            //datos del cliente
            $table->string('cliente')                ->nullable();
            $table->string('telefono')               ->nullable();
            $table->string('domicilio')              ->nullable();
            $table->string('correo')                 ->nullable();

            //datos del dispositivo
            $table->string('marca')                  ->nullable();
            $table->string('modelo')                 ->nullable();
            $table->string('codigo_de_desbloqueo')   ->nullable();
            $table->text('accesorios')               ->nullable();

            //datos del servicio a realizar
            $table->string('servicio')               ->nullable();//------------tipo de servicio a realizar mantenimiento, reparacion ...
            $table->text('observaciones')            ->nullable();
            $table->text('descripcion_de_la_falla')  ->nullable();
            
            $table->rememberToken();
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
        Schema::dropIfExists('registros');
    }
};
