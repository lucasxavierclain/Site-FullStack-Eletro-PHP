// função onclik usada para filtar elementos na página de produtos.html
function filtrar(categoria){

    let elementos= document.getElementsByClassName("box-produtos");
    console.log(elementos)
    for(let i=0; i<elementos.length;i++){
        console.log(elementos[i].id);
        if(categoria==elementos[i].id)
            elementos[i].style="display:block";
        else
        elementos[i].style="display:none";
        
    }
}
function exibirTodos(){
    let elementos= document.getElementsByClassName("box-produtos");
    for(let i=0; i<elementos.length;i++){
        elementos[i].style="display:block";
    }
}

// Função usada para aumentar a imagem com onclik
function destaque(imagem){
    if(imagem.width==240)
        imagem.width=170;
    else
        imagem.width=240;
}


// Função onmousemove e onmouseover para o arquivo loja.html, optei por não usar onmousemove nas imagens por não ficar esteticamente agradavel
function aumentar(elemento){   

    let elementos= document.getElementsByClassName("endereço");

    for(let i=0; i<elementos.length; i++){
        
        if(elemento== elementos[i]){
            let texto= document.getElementsByClassName("textoDoEndereço");
            texto[i].style.color="white";
            elemento.style.backgroundColor="##d9534f";
        }
    }
}
function diminuir(elemento){
    let elementos= document.getElementsByClassName("endereço");

    for(let i=0; i<elementos.length; i++){
        
        if(elemento== elementos[i]){
            let texto= document.getElementsByClassName("textoDoEndereço");
            texto[i].style.color="white";
            elemento.style.backgroundColor="#d9534f";
        }
    }

}