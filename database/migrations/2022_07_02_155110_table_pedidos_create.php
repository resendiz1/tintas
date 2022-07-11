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
            $table->string('name');
            $table->string('puesto');
            $table->string('numero');
            $table->string('negra')->nullable();
            $table->string('amarilla')->nullable();
            $table->string('azul')->nullable();
            $table->string('rosa')->nullable();
            $table->string('foto_tanques');
            $table->string('entregada')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
