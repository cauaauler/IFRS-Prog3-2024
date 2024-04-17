function helloWorld(){
    alert("Olá, mundo!");
}

let botao = document.querySelector("button");
//botao.addEventListener('click', helloWorld);
//o objeto botao esta sendo armazenado em 'e'
botao.addEventListener('click', function(e){
    // alert("Olá, mundo!")
    // e.target.style.backgroundColor = "red";
    // e.target.style.color = "white";
    //let valor = parseInt(document.querySelector('.valor').value);
    //document.querySelector('h1').innerHTML = valor*2;
    let h1 = document.querySelector('h1');
    let nascimento = parseInt(document.querySelector('.valor').value);
    let dataAtual = new Date();
    let anoAtual = parseInt(dataAtual.getFullYear());
    let idade = anoAtual - nascimento;
    if(idade >= 18){
        h1.innerHTML = "Maior de idade";
        h1.style.color = 'green';
    }else{
        h1.innerHTML = "Menor de idade";
        h1.style.color = 'red';
    }

})
