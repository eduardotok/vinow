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
        Schema::create('tb_pagamento', function (Blueprint $table) {
            $table->id();
            $table->decimal("valorPagamento", total: 8, places:2);
            $table->enum("formaPagamento", ['debito', 'credito', 'pix', 'dinheiro']);
            $table->enum("statusPagamento", ['producao',  'caminho' ,'entregue', 'concluido',] );
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
        Schema::dropIfExists('tb_pagamento');
    }
};
