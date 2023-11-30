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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idusuario');
            $table->unsignedBigInteger('idpersona')->nullable();
            $table->string('usuario');
            $table->string('clave');
            $table->boolean('habilitado')->default(true);
            $table->string('fecha')->nullable();
            $table->unsignedBigInteger('idrol')->nullable();
            $table->string('fechamodificacion')->nullable();
            $table->string('usuariocreacion')->nullable();
            $table->string('usuariomodificacion')->nullable();
          // mi llaves foraneas //
          $table->foreign('idpersona')->references('idpersona')->on('personas');
          $table->foreign('idrol')->references('idrol')->on('roles');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
