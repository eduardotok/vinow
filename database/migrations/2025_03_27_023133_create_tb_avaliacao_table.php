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
        Schema::create('tb_avaliacao', function (Blueprint $table) {
            $table->id();
            $table->float('notaAvaliacao', total:2, places:2);
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idProduto');
            $table->boolean('statusAvaliacao');
            $table->date('dataAvaliacao');
            $table->foreign('idUser')->references('id')->on('tb_user');
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
        Schema::dropIfExists('tb_avaliacao');
    }
};
