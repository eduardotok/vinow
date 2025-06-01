<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AUGUSTE Admin</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="css/cores.css" />
    <link rel="stylesheet" href="css/sidebar.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/PadrãoPaginas.css" />
</head>

<body>
    <!-- sidebar -->
    <div class="sidebar" id="sidebar">
        <p onclick="fecharSidebar()" class="fecharsidebar">
            <i class="bx bx-x"></i>
        </p>
        <div class="topo-sidebar">
            <p>AUGUSTE</p>
        </div>
        <div class="navegadores-sidebar">
            <div class="navegadores-topo">
                <a href="#" class="links-sidebar atual">
                    <i class="bx bx-home-alt-2"></i>
                    <p>Visão geral</p>
                </a>
               
            </div>
            <div class="base-sidebar">
                <a href="#" class="links-sidebar">
                    <i class="bx bx-cog"></i>
                    <p>Configurações</p>
                </a>
                <a href="#" class="links-sidebar">
                    <i class="bx bx-log-out"></i>
                    <p>Sair</p>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-mobile" id="botao-abrir-sidebar-celular">
        <button onclick="abrirSidebar()">
            <i class="bx bx-menu"></i>
        </button>
    </div>
    <script src="js/sidebar.js"></script>
    <!-- -----------------------------------------------------^^ Sidebar^^   ----------------------------------------------------- -->

    <main>
        
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar novo produto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex" style="align-items: center; flex-direction: column;">
        <div class="imagemmodalnovoproduto" style="position: relative;">
            <img src="https://cdn-icons-png.flaticon.com/512/4211/4211547.png" alt="" id="preview1">
            <img src="https://cdn-icons-png.flaticon.com/512/4211/4211547.png" alt="" id="preview2" style="position:absolute;top: 0;left: 0;width: 100%;height: 100%; display:none;">
        </div>
        <form action="/novoProduto" id="formModalProduto" method="post" style="width: 80%;" class="mt-3 "enctype="multipart/form-data">
        <input type="file" id="foto" class="d-none foto" name="img" accept="image/*">
        @csrf
        <label for="foto" class="btn mt-4 mb-4"  style="background-color: var(--azul); color:#fff;width: 100%;height: 40px;text-align: center; justify-content: center;display:flex; align-items: center; font-size: 20px;">adicionar foto</label>
        <label for="nome">Nome</label>
        <input type="text" class="form-control" placeholder="Nome do produto" name="nome" id="nomeProduto">
        <label for="valor" class="mt-3" >Valor</label>
        <input type="text" class="form-control" placeholder="R$00,00" name="valor" id="valorProduto">
     
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn "  style="background-color: var(--azul); color:#fff">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="modalEditarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="formEditarUsuario" method="POST" action="">
      @csrf
      @method('POST') <!-- Use @method('PUT') se for RESTful -->

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarUsuarioLabel">Editar Usuário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="mb-3">
            <label for="nascimento" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="nascimento" name="nascimento">
          </div>
        <!-- 
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div> -->
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
      </div>
    </form>
  </div>
</div>

        <div class="container-fluid cont-topo">
            <div class="titulo">
                <p>Visão geral</p>
            </div>
            <div class="lista-cards-home">
                <div
                    
                    class="card-home cardSelecionado"
                    id="cardUser"
                    style="    background-color: var(--azul);color: #fff"
                    onclick="mostrarUsuario()"
                   >
                    <p>Usuarios</p>
                     <p class="numero">{{ $quantUsuarios }}</p> 
                    <i class="bx bx-user"></i>
                </div>
                <div class="card-home" onclick="mostrarProduto()"  id="cardProd">
                    <p>Produtos</p>
                    <p class="numero">{{ $quantidadeProdutos }}</p>
                    <i class="bx bx-bowl-hot"></i>
                </div>
                <div class="card-home"  id="cardReserva"  onclick="mostrarReservas()">
                    <p>Reservas</p>
                    <p class="numero">{{ $countReserva }}</p>
                    <i class="bx bx-calendar"></i>
                </div>
            </div>
        </div>
        <hr style="margin-top: 3%" />
        <div class="container-fluid" id="cont-usuarios" >
            <div class="titulo-areas">
                <p>Usuarios cadastrados</p>
            </div>
            <!-- <div class="container-input-pesquisa">
                <input type="search" placeholder="Procure pelo nome do usuario">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
            
            
            <div class="lista-cards-usuarios">
                @foreach ($usuarios as $usuario )
                <div class="card-usuario">
                  <div class="infos">
                    <p class="id">{{$usuario -> id}}</p>
                    <p class="nome">{{$usuario -> nomeUser}} </p>
                    <p class="email">{{$usuario -> email}}</p>
                  </div>
                    <div class="funcoes">
                      
                        <button  onclick="abrirModalEditarUsuario('{{$usuario -> id}}', '{{$usuario -> nomeUser}}', '{{$usuario -> email}}', '{{$usuario -> dataNascUser}}', '{{$usuario -> senhaUser}}')"><i class='bx bx-edit' ></i></button>
                        <a href="deletarUsuario/{{$usuario -> id}}"><i class='bx bx-x' ></i></a>
                        @if ($usuario->statusUser==1)
                        <p style="color: #00A63D;">ativado</p>
                        @else
                        <p style="color:rgb(166, 8, 0);">Desativado</p>
                        @endif
                    </div>
                </div>
                @endforeach
             
            </div>
        </div> 
        <div class="container-fluid" id="cont-produtos">
            <div
                class="titulo-areas d-flex justify-content-between"
                style="flex-wrap: wrap">
                <p>Produtos cadastrados</p>
                <div class="botoes-topo-produtos">
                    <button  data-bs-toggle="modal" data-bs-target="#exampleModal"  id="exampleModal">Cadastrar novo produto</button>
                    <!-- <button>Cadastrar nova categoria</button> -->
                </div>
            </div>
            <!-- <div class="container-input-pesquisa">
                <input
                    type="search"
                    placeholder="Procure pelo nome do usuario" />
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="botoes-de-filtros-produtos">
                <button>Pratos</button>
                <button>Bebibas</button>
                <button class="selecionado-produto-filtro">Sobremessas</button>
            </div> -->

            <div class="lista-cards-produtos">
                @foreach ($produtos as $produto)
                <div class="card card-produto p-0 border-0"  data-bs-toggle="modal" data-bs-target="#exampleModal"  id="exampleModal" style="cursor: pointer;" onclick="modalEditarProduto('{{$produto->imgProduto}}','{{$produto->nomeProduto}}','{{$produto->valor}}','{{$produto->id}}')">
                    <div class="w-100 container-img-card">
                        <img src="img/produtos/{{$produto->imgProduto}}" class="w-100" alt="">
                    </div>
                    <div class="d-flex flex-column mt-2 p-1 ">
                        <p class="fw-medium fs-6 mb-1 text-uppercase">{{$produto->nomeProduto}}</p>
                        <p class="fw-light fs-6  text-uppercase">R${{$produto->valor}}</p>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
                <div class="container-fluid" id="cont-reservas"  style="display: none; width:100%;">
                               <div class="titulo-areas">
                <p>Reservas cadastrados</p>
            </div>
            <!-- <div class="container-input-pesquisa">
                <input type="search" placeholder="Procure pelo nome do usuario">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
            
            
            <div class="lista-cards-usuarios">
                @foreach ($reserva as $usuario )
                <div class="card-usuario" style="height: 80px;">
                  <div class="infos">
                    <p class="id">id: {{$usuario -> id}}</p>
                    <p class="id"> usuario: {{$usuario -> idUser}}</p>
                    <p class="nome"> data: {{$usuario -> dataReserva}} </p>
                    <p class="nome"> horario: {{$usuario -> horarioReserva}}</p>
                    <p> {{ $usuario -> qtdClientesReserva }} pessoa(s)</p>
                  </div>
                    <div class="funcoes">
                      
                        <a href="deletarReserva/{{$usuario -> id}}"><i class='bx bx-x' ></i></a>
                    
                    </div>
                </div>
                @endforeach
             
            </div>
                </div>

    </main>
    <script src="js/homeadm.js"></script>
    <script src="js/atualizarFoto.js"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>