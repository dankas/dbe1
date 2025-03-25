//Exercicio 1
for (let i = 0; i < 8; i++) {
    console.log("PROGRAMACAO WEB");
}
//Exercicio 2
for (let i = 15; i <= 30; i++) {
    console.log(` ${i} ao quadrado é ${i * i}`);
}

//Exercicio 3
for (let i = 101; i <= 110; i++) {
    console.log(i);
}

//Exercicio 4

for (let i = 11; i <= 21; i++) {
    if (i % 2 !== 0) {
        console.log(i);
    }
}

//Exercicio 5 (é uma progressão aritmética, assim é possivel calcular a através da formula da soma de gaussmedia_gauss = ((49*(1+49))/2)/49
media_gauss = ((49*(1+49))/2)/49
console.log("A soma é " + media_gauss)
console.log('Media da soma é ' + media_gauss )


//Exercicio 6

let numero1=prompt("digite o primeiro número")
let numero2=prompt("digite o segundo número")
let media1 = (parseInt(numero1) + parseInt(numero2))/2
console.log("Média:", media1);

//exercicio 7
let numero = prompt("Digite um número:");
function verificar(numero) {
    if (numero % 2 === 0) {
        alert( numero + " é par.");
    } else {
        alert( numero + " é ímpar.");
    }
}
verificar(parseInt(numero));

//exercicio 8
