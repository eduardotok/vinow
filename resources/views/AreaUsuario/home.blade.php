<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
@extends('componentes.navBar')

    <main>

        <!--Carousel md-->

        <div class="card-group d-none d-sm-flex py-5">
            <div class="card">
                <img src="img/image.png" class="card-img-top rounded-0" alt="...">
            </div>
            <div class="card">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/7e/f5/b2/adega-santiago.jpg?w=600&h=-1&s=1" class="card-img-top rounded-0" alt="...">
            </div>
            <div class="card d-none d-md-block">
                <img src="https://img.freepik.com/fotos-gratis/interior-do-restaurante_1127-3392.jpg?semt=ais_hybrid&w=740" class="card-img-top rounded-0" alt="...">
            </div>
        </div>

        <!--Carousel sm-->

        <div id="carouselExampleSlidesOnly" class="carousel slide d-sm-flex d-sm-none py-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/image.png" class="d-block w-100" style="height: 275px !important;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/image.png" class="d-block w-100" style="height: 275px !important;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/image.png" class="d-block w-100" style="height: 275px !important;" alt="...">
                </div>
            </div>
        </div>

        <!--Motivação do restaurante-->

        <div class="container py-5">
            <div class="row px-1 d-flex justify-content-center and align-items-center">
                <div class="col-xl-6">
                    <h1 class="text-sm-start text-center">
                        <span style="letter-spacing: .9rem; font-weight: 650;">MOTIVAÇÃO</span>
                    </h1>
                    <p>
                        Nosso restaurante nasce do desejo de oferecer uma experiência gastronômica única, onde
                        sofisticação, exclusividade e alta gastronomia se encontram em perfeita harmonia. Mais do que um
                        simples jantar, buscamos proporcionar momentos inesquecíveis, transformando cada refeição em uma
                        celebração de sabores, aromas e sensações.
                    </p>
                    <p>
                        Cada detalhe do nosso ambiente foi cuidadosamente planejado para transmitir requinte e conforto,
                        criando um espaço onde o tempo desacelera e a excelência se faz presente em cada prato. Nossos
                        chefs, verdadeiros artistas da culinária, utilizam ingredientes selecionados e técnicas
                        refinadas para criar combinações surpreendentes, elevando a experiência gastronômica a um novo
                        patamar.
                    </p>
                </div>
                <div class="col-xl-6 ">
                    <img src="img/motivacao.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>



        <div class="container py-3">
            <h1 class=" text-center py-2">
                <span style="letter-spacing: .4rem; font-weight: 650;">NOSSA COZINHA</span>
            </h1>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagemRuim.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagemRuim.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagemRuim.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>