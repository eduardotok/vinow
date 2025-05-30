<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'tb_reserva';

    public $fillable = ['id', 'dataReserva', 'horarioReserva', 'qtdClientesReserva','idUser','idMesa','idAgenda', 'created_at', 'updated_at'];

    public $timestamps = false;

    public function selectReservas(){
        $reservas = Reserva::All();

        return $reservas;
    }
}
