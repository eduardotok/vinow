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
        Schema::create('tb_produto_especial', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProduto');
            $table->string('tituloProdutoEspecial');
            $table->string('descProdutoEspecial');
            $table->foreign('idProduto')->references('id')->on('tb_produto');
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
        Schema::dropIfExists('tb_produto_especial');
    }
};
