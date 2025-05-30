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
        Schema::create('tb_restaurante', function (Blueprint $table) {
            $table->id();
            $table->string("nomeRestaurante");
            $table->string("emailRestaurante");
            $table->string("cnpjRestaurante");
            $table->string("numeroRestaurante");
            $table->string("descRestaurante");
            $table->string("logradouroRestaurante");
            $table->string("numLogradouroRestaurante");
            $table->string("complementoLogradouroRestaurante");
            $table->string("cidadeRestaurante");
            $table->string("estadoRestaurante");
            $table->string("bairroRestaurante");
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
        Schema::dropIfExists('tb_restaurante');
    }
};
