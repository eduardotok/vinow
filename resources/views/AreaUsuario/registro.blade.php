<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css'); }}">

</head>

<body>
@extends('componentes.navBar')

    <div class="full-width d-flex justify-content-center and align-items-center ">
        <form action="/registrarNovoUser" class="formWrapper" method="post">
            @csrf
            <div class="mb-4">
                <h2 class="text-center">FAÇA SEU CADASTRO</h2>
            </div>

            <div class="input-group mb-3 px-1 px-1">
                <label class="label">Nome</label>
                <input autocomplete="off" name="nome" id="Email" class="input" type="text">
                <div></div>
            </div>
            <div class="input-group mb-3 px-1">
                <label class="label">E-mail</label>
                <input autocomplete="off" name="email" id="vaisefode" class="input" type="text">
                <div></div>
            </div>
            <div class="input-group mb-3 px-1">
                <label class="label">Data de nascimento</label>
                <input autocomplete="off" name="dataNasc" id="Email" class="input" type="date">
                <div></div>
            </div>
            <div class="input-group mb-3 px-1">
                <label class="label">Senha</label>
                <input autocomplete="off" name="password" id="Email" class="input" type="password">
                <div></div>
            </div>
            <div class="input-group mb-3 px-1">
                <label class="label">Confirmar Senha</label>
                <input autocomplete="off" name="Email" id="Email" class="input" type="password">
                <div></div>
            </div>
            <div class="input-group mb-3 px-1">
                <label>Já tem uma conta?<span> <a href="/login">Login</a></span></label>
            </div>
            <div class="input-group mb-3 px-1">
                <button class="btnRegistro">
                    <label>CRIAR CONTA</label>
                </button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>