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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('negra')->nullable();
            $table->string('amarilla')->nullable();
            $table->string('azul')->nullable();
            $table->string('rosa')->nullable();
            $table->string('foto_tanques');
            $table->string('entregada');
            $table->unsignedBigInteger('id_usuario');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
