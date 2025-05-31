<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
            <link rel="stylesheet" href="{{url('css/catalogo.css')}}">
            <title>sitezin</title>
    </head>
    @extends('componentes.navBar')
<body>
    





<div class="container-fluid p-0 position-relative">
        <img src="https://images01.nicepage.com/a1389d7bc73adea1e1c1fb7e/f55c87d06a345e9c94021f3e/3007283.jpg" alt="" class="img-fluid img-topo">
        <div class="position-absolute  top-0 start-0 w-100 h-100 align-items-center justify-content-center d-flex" style="background-color: #00000080;color: white;">
            <h1 class="text-uppercase fw-bold">cardápio </h1>
        </div>
        
    </div>
    <div class="container-fluid  mt-5 cont" >
        <!-- <div class="row gap-5 p-0 " >
            <div class="col-md-3 m-0 p-0 pe-5">
                <input type="text" placeholder="o que procura?..."
                    class="form-control col-md-1 shadow-none border-black rounded-1 border-2 pb-2 pt-2">
            </div>
            <div class="col-md-2" >
                <button class="text-uppercase btn w-100 border-2 border-black pb-1 pt-1 fw-bold fs-5   rounded-1  ">Vinho</button>
            </div>
            <div class="col-md-2" >
                <button class="text-uppercase btn w-100 border-2 border-black pb-1 pt-1 fw-bold fs-5   rounded-1  ">WHISKY</button>
            </div>
            <div class="col-md-2" >
                <button class="text-uppercase btn w-100 border-2 border-black pb-1 pt-1 fw-bold fs-5   rounded-1  ">DRINKS</button>
            </div>
        </div> -->
        <div class="row mt-5" style="gap: 6.66%;">
        @foreach ($produtos as $produto)
            <div class="card card-catalogo p-0 border-0" >
                <div class="w-100 container-img-card">
                    <img  src="img/produtos/{{$produto->imgProduto}}" class=" h-100 w-100" style="object-fit: cover;"alt="">
                </div>
                <div class="d-flex flex-column mt-2">
                    <p class="fw-medium fs-6 mb-1 text-uppercase">{{$produto->nomeProduto}}</p>
                    <p class="fw-light fs-6  text-uppercase">R${{$produto->valor}}</p>

                </div>
            </div>
            @endforeach
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>