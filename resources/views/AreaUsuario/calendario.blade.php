<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <title>sitezin</title>
    </head>
<body>
@extends('componentes.navBar')

<div class="d-flex  justify-content-center align-items-center h-100 " >

        <div class="row calendario col-10 col-sm-7  col-lg-5 col-xl-4" >
        <div  style="height: 100px;">    
        <div class="col-12 div-titulo-calendario d-flex justify-content-center " >
                <h1>Faça sua Reserva</h1>
            </div>
            <div class="d-flex col-12 justify-content-between header-calendario " >

                <button id="prevButton">
                    <i class='bx bx-chevron-left ' ></i>
                </button>


                <div class="mes-calendario d-flex align-items-center" id="mesCalendario"></div>

                <button id="nextButton">
                    <i class='bx bx-chevron-right'></i>
                </button>

            </div>
            </div>
            <div style="height: 350px;">
            <div class="col d-flex justify-content-around my-2 dias">
                <div class="dia">S</div>
                <div class="dia">T</div>
                <div class="dia">Q</div>
                <div class="dia">Q</div>
                <div class="dia">S</div>
                <div class="dia">S</div>
                <div class="dia">D</div>
            </div>
            
            <form action="{{ route('agendamento.store') }}" method="post">
        @csrf
            <div class="divDiasDoAno" id="divDiasDoAno">
            </div>
            </div>
            
            <div class="div-inputs-calendario col-12 d-flex justify-content-between my-3 " >
                <div class=" ps-1 col-6 ">
                    <label class="labels" for="numPessoas" >Numero de Pessoas</label>
                    <select name="pessoas"  id="numPessoas" style="height: 30px; border-width: 2px;border-color: black; border-radius: 2px;">
                        <option value="1">1 Pessoa</option>
                        <option value="2">2 Pessoas</option>
                        <option value="4">4 Pessoas</option>
                    </select>
                </div>
                <div class=" d-flex  align-items-end  col-6  pe-1" style="flex-direction: column; ">
                    <label class="labels  ps-4 ps-sm-5 " for="horario">Horário</label>
                    <select name="horario"  id="horario" style="height: 30px; border-width: 2px;border-color: black; border-radius: 2px;">
                        <option value="20h">20:00</option>
                        <option value="17h">17:00</option>
                    </select>
                </div>
                </div>

            <div class="col-12  d-flex align-items-center my-3 justify-content-center">
                <button class="btn-reservar">RESERVAR</button>
            </div>
        </form>
        
        </div>

        
    </div>

    @foreach ($reservas as $item)
            <h4> Agendamento</h1>
        
        <ul>
            <li>ID Agendamento: {{$item->id}}</li>
            <li>Data Agendamento: {{$item->dataReserva}}</li>
            <li>Horario Agendamento: {{$item->horarioReserva}}</li>
            <li>Pessoas Agendamento: {{$item->qtdClientesReserva}}</li>
            
        </ul>
        @endforeach



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="{{ url('js/calendario.js') }}"></script>
</body>
</html>