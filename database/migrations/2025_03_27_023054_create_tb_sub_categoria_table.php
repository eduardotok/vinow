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
        Schema::create('tb_sub_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idCategoria");
            $table->string("nomeSubCategoria");
            $table->foreign('idCategoria')->references('id')->on('tb_categoria');
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
        Schema::dropIfExists('tb_sub_categoria');
    }
};
