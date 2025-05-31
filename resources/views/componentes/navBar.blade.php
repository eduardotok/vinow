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
                     @auth
                     <a href="/delogarUsuario">deslogar</a>
                     @endauth
                     @guest
                     <a href="/loginView">LOGAR</a>
                     @endguest
            </div>
        </div>
       
    </nav>

