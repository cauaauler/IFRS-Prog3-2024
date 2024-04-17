let aumentar = document.querySelector(".aumentar");
let subtrair = document.querySelector(".subtrair");
let resetar = document.querySelector(".resetar");
let contador = document.querySelector(".contador");

aumentar.addEventListener('click', function(e){
    contador.innerHTML = parseInt(contador.innerHTML) ++;
})
