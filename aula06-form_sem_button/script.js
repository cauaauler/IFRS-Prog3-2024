let valor = document.querySelector('.numero');

valor.addEventListener('input', function(e){
    if(!valor.value){
        document.querySelector('h1').innerHTML = "";
    }else{
        if (valor.value % 2 == 0) {
            document.querySelector('h1').innerHTML = "Par";
        } else {
            document.querySelector('h1').innerHTML = "Ímpar";
        }
    }
   
})