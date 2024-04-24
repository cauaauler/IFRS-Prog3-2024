const form = document.querySelector('form');

form.addEventListener('submit', function(e){
    e.preventDefault();

    const dadosForm = new FormData(form);
    let valor = dadosForm.get("numero");  
    console.log(valor)  

    if (valor % 2 == 0) {
        document.querySelector('h1').innerHTML = "Par";
    } else {
        document.querySelector('h1').innerHTML = "Ímpar";
    }
});
