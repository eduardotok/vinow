<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">
    
    <nav>
        <div class="centro">
            <div class="titulo">
                AUGUSTE GUSTEAU
            </div>
            <div class="links">
                
                    <a href="/home">HOME</a>
                
                
                    <a href="/cardapio"> CARDAPIO</a>
                    <!-- <a href="/">RESERVAR</a> -->
                    @if (session('idUser'))
                    <a href="/">RESERVAS</a>
                     <a href="/delogarUsuario">DESLOGAR</a>
                     @else
                     <a href="/loginView">LOGAR</a>
                     @endif
            </div>
        </div>
       
    </nav>

