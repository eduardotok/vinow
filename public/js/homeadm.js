const cont_usuario = document.getElementById("cont-usuarios")
const cont_produtos = document.getElementById("cont-produtos")
const cUser = document.getElementById("cardUser")
const cProd = document.getElementById("cardProd")
const cRes = document.getElementById("cardReserva")

function mostrarProduto(){
    cont_usuario.style.display ="none"
    cont_produtos.style.display ="block"
    cUser.style.backgroundColor = "#fff";
    cUser.style.color = "var(--azul)"
    cRes.style.backgroundColor = "#fff";
    cRes.style.color = "var(--azul)"
    cProd.style.backgroundColor = "var(--azul)";
    cProd.style.color = "#fff"
}
function mostrarUsuario(){
    cont_usuario.style.display ="block"
    cont_produtos.style.display ="none"
    cProd.style.backgroundColor = "#fff";
    cProd.style.color = "var(--azul)"
    cRes.style.backgroundColor = "#fff";
    cRes.style.color = "var(--azul)"
    cUser.style.backgroundColor = "var(--azul)";
    cUser.style.color = "#fff"
}



function modalEditarProduto(img,nome,valor,id){
    document.getElementById("formModalProduto").innerHTML += `<input value="${img}" name="nomeImg" type="hidden">`;
    document.getElementById('nomeProduto').value = nome
    document.getElementById('valorProduto').value = valor
    document.getElementById("preview1").src = 'img/produtos/'+img;
    document.getElementById("formModalProduto").action = '/editarProduto/'+id
    document.querySelector('.modal-footer').insertAdjacentHTML ('afterbegin', `<a href="/deletarProduto/${id}" class="btn btn-danger" >Deletar</a>`)
}

function abrirModalEditarUsuario(id, nome, email, nascimento, senha) {

    document.getElementById('nome').value = nome;
    document.getElementById('email').value = email;
    document.getElementById('nascimento').value = nascimento;
    document.getElementById('senha').value = senha;


    document.getElementById('formEditarUsuario').action = '/editarUsuario/' + id;

   
    var modal = new bootstrap.Modal(document.getElementById('modalEditarUsuario'));
    modal.show();
}