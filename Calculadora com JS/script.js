var num1 = 0;
var simbolo = 0;

function inserirNumero(num){
    const inputNum = document.querySelector("#numero");
    inputNum.value +=num;
}

function calculo(sim){
    const inputNum = document.querySelector("#numero");
    num1 = inputNum.value;
    inputNum.value = "";
    simbolo=sim;
    // console.log(num1);
    // console.log(sim);
}

function resultado(){
    const inputNum = document.querySelector("#numero");
    var num2 = inputNum.value;
    console.log(num1);
    console.log(simbolo);
    console.log(num2);

    let resultado=0;
    if(simbolo == '+'){
        resultado = Number(num1) + Number(num2);
    }
    if(simbolo == '-'){
        resultado = num1 - num2;
    }
    if(simbolo == 'X'){
        resultado = num1 * num2;
    }
    if(simbolo == '/'){
        resultado = num1 / num2;
    }

    inputNum.value = resultado
}


