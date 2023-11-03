<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->string('usuario');
            $table->string('clave');
            $table->enum('habilitado', ['activo', 'inactivo']);
            $table->date('fecha');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->timestamps();


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
