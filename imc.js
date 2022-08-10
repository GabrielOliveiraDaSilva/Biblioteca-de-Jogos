/*  Esse é o cálculo de IMC (indice de Massa Corporal).
    A base é Peso(kg) / Altura (m)²*/


let altura = 1.72
let peso = 71
let imcResultado = 0

const imc = peso / Math.pow(altura , 2);

console.log (imc);

if (imc < 18.5){

   imcResultado = ('Baixo Peso');
} else if(imc >= 18.5 , imc <24.99){

    imcResultado = ('Peso Normal');
} else if(imc >= 24.99 , imc <= 29.99){

    imcResultado = ('Sobrepeso');
} else{ 

    imcResultado = ('Obesidade');
}

console.log("Seu resultado de IMC é: ", imcResultado);

