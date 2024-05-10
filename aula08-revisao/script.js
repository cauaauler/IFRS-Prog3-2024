let input_moeda = document.querySelector(".valor_moeda");
let input_peso = document.querySelector(".valor_peso");
let resposta = document.querySelector(".resposta");
let btn_converter_moeda = document.querySelector(".btn_converter_moeda");
let btn_converter_peso = document.querySelector(".btn_converter_peso");

document.querySelector(".data").innerHTML = new Date().getFullYear();

if (window.location.pathname.includes("index.html")) {
    btn_converter_moeda.addEventListener('click', function(e){
        let moedaSelecionada = document.getElementById("moedas").value;
        let valorEntrada = parseFloat(input_moeda.value);

        const taxasConversao = {
            dolar_real: 5.16, 
            real_dolar: 0.19,
            euro_real: 5.56,
            real_euro: 0.18
        };

        let valorConvertido;
        let simbolo;

        switch(moedaSelecionada) {
            case 'dolar_real':
                valorConvertido = valorEntrada * taxasConversao.dolar_real;
                simbolo = "R$";
                break;
            case 'real_dolar':
                valorConvertido = valorEntrada * taxasConversao.real_dolar;
                simbolo = "USD";
                break;
            case 'euro_real':
                valorConvertido = valorEntrada * taxasConversao.euro_real;
                simbolo = "R$";
                break;
            case 'real_euro':
                valorConvertido = valorEntrada * taxasConversao.real_euro;
                simbolo = "EUR";
                break;
            default:
                break;
        }

        if (!valorConvertido) {
            resposta.textContent = "Por favor, insira um valor válido.";
        } else {
            resposta.textContent = "Valor: " + simbolo + " " + valorConvertido.toFixed(2);
        }
    });
}

btn_converter_peso.addEventListener('click', function(e){
    let pesoSelecionado = document.getElementById("pesos").value;
    let valorEntrada = parseFloat(input_peso.value);

    const taxasConversao = {
        kg_grama: 1000, 
        kg_libra: 2.2046,
        kg_quilate: 5000,
        kg_mili: 1000000
    };

    let valorConvertido;
    let simbolo;

    switch(pesoSelecionado) {
        case 'kg_grama':
            valorConvertido = valorEntrada * taxasConversao.kg_grama;
            simbolo = "gramas";
            break;
        case 'kg_libra':
            valorConvertido = valorEntrada * taxasConversao.kg_libra;
            simbolo = "libras";
            break;
        case 'kg_quilate':
            valorConvertido = valorEntrada * taxasConversao.kg_quilate;
            simbolo = "quilates";
            break;
        case 'kg_mili':
            valorConvertido = valorEntrada * taxasConversao.kg_mili;
            simbolo = "miligramas";
            break;
        default:
            break;
    }

    if (!valorConvertido) {
        resposta.textContent = "Por favor, insira um valor válido.";
    } else {
        resposta.textContent = "Valor: " + valorConvertido.toFixed(2) + " " + simbolo;
    }
});
