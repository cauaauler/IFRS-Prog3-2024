//Vai desaparecer os tres botões e depois aparece a sua escolha contra a cpu no lugar
//Remover o do meio, transformar o primeiro na escolha e o terceiro o random 
let pedra = document.querySelector(".pedra");
let papel = document.querySelector(".papel");
let tesoura = document.querySelector(".tesoura");

let main = document.querySelector(".main");


pedra.addEventListener('click', () => escolha(pedra))
papel.addEventListener('click',() => escolha(papel))
tesoura.addEventListener('click', () => escolha(tesoura))

function randomizar(){
    console.log(nextInt(3));
}

function escolha(valor){
    pedra.innerHTML = valor.innerHTML;
    papel.remove();
    tesoura.remove();
    let item = document.createElement('h1');
    item.innerText = 'X';
    main.appendChild(item);
    valor.innerHTML = '';
    randomizar();
}