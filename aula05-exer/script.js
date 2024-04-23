let aumentar = document.querySelector(".aumentar");
let subtrair = document.querySelector(".subtrair");
let resetar = document.querySelector(".resetar");
let contador = document.getElementsByClassName("contador")[1];

var numeroContador = 0;

aumentar.addEventListener('click', function(e){
    contador.innerHTML = ++numeroContador;
})
subtrair.addEventListener('click', function(e){
    contador.innerHTML = --numeroContador;
})
resetar.addEventListener('click', function(e){
    contador.innerHTML = 0;
    numeroContador = 0;
})
