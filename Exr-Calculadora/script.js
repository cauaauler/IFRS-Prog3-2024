let btn_calcular = document.querySelector(".calcular");

btn_calcular.addEventListener("click", function (e) {
  e.preventDefault();
  let peso = document.querySelector(".peso").value;
  let altura = document.querySelector(".altura").value;
  let idade = document.querySelector(".idade").value;

  var genero = document.querySelector("input[name=genero]:checked").value;

  if (genero == "Masculino") {
    document.querySelector('h2').innerHTML=66 + 13.8 * peso + 5 * altura - 6.8 * idade + " calorias";
  } else {
    document.querySelector('h2').innerHTML=65.5 + 9.6 * peso + 1.8 * altura - 4.7 * idade + " calorias";
  }
});