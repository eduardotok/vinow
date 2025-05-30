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
        Schema::create('tb_pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idUser");
            $table->unsignedBigInteger("idProduto");
            $table->string("logradouroPedido");
            $table->string("numLogradouroPedido");
            $table->string("complementoLogradouroPedido");
            $table->string("cidadePedido");
            $table->string("estadoPedido");
            $table->string("bairroPedido");
            $table->foreign("idUser")->references("id")->on("tb_user");
            $table->foreign("idProduto")->references("id")->on("tb_produto");

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
        Schema::dropIfExists('tb_pedido');
    }
};
