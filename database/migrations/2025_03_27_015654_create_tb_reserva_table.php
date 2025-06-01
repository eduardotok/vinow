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
        Schema::create('tb_reserva', function (Blueprint $table) {
            $table->id();
            $table->date("dataReserva");
            $table->integer("qtdClientesReserva");
            $table->string("horarioReserva");
                    
            $table->foreign("idUser")->references("id")->on("users");
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
        Schema::dropIfExists('tb_reserva');
    }
};
