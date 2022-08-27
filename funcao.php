<?php
function ImprimirQuebra(){ //Declara a função
    echo "<br>"; //Pula uma linha
    echo "<hr>"; //Coloca uma linha abaixo
    echo"<br>";
}
function ImprimirTexto($texto){
    echo $texto."<br>"."<hr>"; //Colocando todas as funcoes aqui economiza e nao precisa colocar o imprimir quebra
}

$meuTexto = "Aqui vai uma string com qualquer tipo de dados". "26"; //Para concatenar tem que colocar esse ponto entre eles
ImprimirTexto("Talita");
ImprimirQuebra(); //Puxa a função criada acima. Vai economizar de repetir todos os comandos
ImprimirTexto($meuTexto);
ImprimirQuebra();
ImprimirTexto("Aluna");
ImprimirQuebra();

function Adicao($numero1, $numero2){
    $soma = $numero1+$numero2;
    ImprimirTexto($soma);
}
function Subtracao($numero1, $numero2){
    $sub = $numero1-$numero2;
    ImprimirTexto($sub);
}
function Multiplicacao($numero1, $numero2){
    $mult = $numero1*$numero2;
    ImprimirTexto($mult);
}
function Divisao($numero1, $numero2){
    $div = $numero1/$numero2;
    ImprimirTexto($div);
}
function Media($numero1, $numero2){
    $med = ($numero1+$numero2)/2;
    ImprimirTexto($med);
}

Adicao(12,8);
Subtracao(12,8);
Multiplicacao(12,8);
Divisao(12,8);
Media(12,8);

/* Modo que o professor fez a media
function Media($numero1, $numero2){
    return Adicao($numero1,$numero2)/2;
}
Ai ele tira o imprimir e o soma de soma e coloca apenas: return $numero1 + $numero2
Com isso pode tirar o ImprimirTexto de todos e tirar tudo antes do = substituindo por return
Depois é só colocar:
ImprimirTexto(Adicao(12,8)); 
Ou pode fazer dessa maneira:
ImprimirTexto(Adicao(586,347));
*/

//Criar uma calculadora que peça dois numeros, a equação desejada e imprimir o resultado

function Calculadora($numero1, $numero2, $operacao){
    if($operacao == "+"){
        ImprimirTexto(Adicao($numero1,$numero2));
    }else if($operacao == "-"){
        ImprimirTexto(Subtracao($numero1,$numero2));
    }else if($operacao == "*"){
        ImprimirTexto(Multiplicacao($numero1,$numero2));
    }else if ($operacao == "/"){
        ImprimirTexto(Divisao($numero1,$numero2));
    }else if($operacao == "m"){
        ImprimirTexto(Media($numero1,$numero2));
    }else {
        ImprimirTexto("Operação Inválida");
    }
}
Calculadora(12,8,"+");
?>