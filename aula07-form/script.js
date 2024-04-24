let pedraBtn = document.querySelector(".pedra");
let papelBtn = document.querySelector(".papel");
let tesouraBtn = document.querySelector(".tesoura");

let main = document.querySelector(".main");

pedraBtn.addEventListener('click', () => escolha(pedraBtn));
papelBtn.addEventListener('click', () => escolha(papelBtn));
tesouraBtn.addEventListener('click', () => escolha(tesouraBtn));

const botoes = [pedraBtn, papelBtn, tesouraBtn]; 

let resetBtn = document.createElement('input');
resetBtn.type = 'button';
resetBtn.value = "Jogar Novamente";
resetBtn.addEventListener('click', resetar);

let textoJogador =  document.querySelector('.h1_jogador');
let textoAdversario = document.querySelector('.h1_adversario');

function escolha(valor){
    // Remove os 3 botões
    botoes.forEach(botao => botao.remove());

    // Mostra a escolha do jogador
    let escolhaJogador = document.createElement('button');
    escolhaJogador.innerHTML = valor.innerHTML;
    escolhaJogador.className = valor.className;
    main.appendChild(escolhaJogador);

    // Adiciona div para separar
    let div = document.createElement('div');
    main.appendChild(div);

    // Cria um display para o resultado
    let resultado = document.createElement('h1');
    div.appendChild(resultado);

    // Cria o botão do adversário
    let adversario = document.createElement('button');
    let escolhaAdversario = botoes[getRandomArbitrary(0, botoes.length)];
    adversario.className = escolhaAdversario.className;
    adversario.innerHTML = escolhaAdversario.innerHTML;
    adversario.style.transform = 'scaleX(-1)'; 
    main.appendChild(adversario);

    // Printa o resultado
    resultado.innerHTML = verificar(valor, escolhaAdversario);

    // Habilita o nome dos jogadores
    textoJogador.removeAttribute('hidden');
    textoAdversario.removeAttribute('hidden');

    // Adiciona botão de reset
    div.appendChild(resetBtn);
}

function resetar(){
   
    // Remove a escolha do jogador, o resultado e o botão de reset
    main.innerHTML = '';

    let div1 = document.createElement('div');
    let div2 = document.createElement('div');
    let div3 = document.createElement('div');

    //Gambiarra voltar como estava no inicio

    main.appendChild(div1);
    textoJogador.hidden = true;
    div1.appendChild(textoJogador);
    div1.appendChild(botoes[0], textoJogador);
    main.appendChild(div2);
    div2.appendChild(botoes[1]);
    main.appendChild(div3);
    textoAdversario.hidden = true;
    div3.appendChild(textoAdversario);
    div3.appendChild(botoes[2]); 
       
}

function verificar(escolha, escolhaAdversario){
    if(escolha == escolhaAdversario){
        return "Empate";
    } else if(
        (escolha == pedraBtn && escolhaAdversario == tesouraBtn) ||
        (escolha == papelBtn && escolhaAdversario == pedraBtn) ||
        (escolha == tesouraBtn && escolhaAdversario == papelBtn)
    ) {
        return "Você venceu";
    } else {
        return "Você perdeu";
    }
}

function getRandomArbitrary(min, max) {
    return parseInt(Math.random() * (max - min) + min);
}
