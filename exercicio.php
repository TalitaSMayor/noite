    <?php
    // Faça uma função que receba como parametro um número de quantidade de itens e retorne retorne um array.

    function RetornaArray($n){
        $retorno = array();
        for($i=0; $i<=$n; $i++){
            $retorno[$i]=rand(-10,10);
        }
        return $retorno;
    }

    echo "<pre>";
    print_r(RetornaArray(10));
    echo "</pre>";

    ?>

    <?php     
    // Chame a função do exercicio 1 e some todos os itens do array;
    $meuArray=RetornaArray(10);
    echo "<pre>";
    print_r($meuArray);
    echo "</pre>";
    $soma=0;
    $pares=0;
    $impares=0;
    $negativos=0;
    $positivos=0;
    for($i=0; $i<count($meuArray); $i++){
        $soma+=$meuArray[$i];
        if($meuArray[$i]%2==0){$pares++;} else{$impares++;}
        if($meuArray[$i]<0){$negativos++;} else{$positivos++;}
    }
    echo "<h1>".$soma."<h1>";

    ?>

    <?php
    // Utilizando o For imprima a tabuada do 135

    $tabuada = 135;
    for($count=1; $count<10; $count++){
    echo $tabuada. "x". $count. "=" . ($tabuada*$count)."<br />"; 
    }
    
    ?>

    <?php
     // Faça uma função que some todos os pares de 250 a 365 e exiba na tela
     
    function SomarPares($inicio, $fim){
         $soma=0;
         for($i=$inicio; $i<=$fim; $i++){
          if($i%2==0){
             $soma+=$i;
             }
         }
        echo "<h2>Soma: ".$soma."<h2>";
    }

    SomarPares(2,4);
    SomarPares(4,4);
    SomarPares(2,6);
    SomarPares(2,8);
    SomarPares(2,10);
    SomarPares(2,500);
    SomarPares(10,30);
    echo"<br>".porcentagem(150,30);

    ?>

    <?php
     // Faça uma função que calcule a porcentagem de um numero.

     function porcentagem($numero, $porcentagem){
         return $porcentagem."% de ".$numero." e ".(($numero/100)*$porcentagem);
     }
     echo"<h1>".porcentagem(110,25)."</h1>";
     
     ?>

     <?php
     // Faça um array que gere 10 números aleatórios e verifique quantos são pares, quantos são impares, quantos são positivos e quantos são negativos

     echo "Pares:".$pares. "Impares:". $impares. "Negativos:".$negativos. "Positivos:".$positivos;

     ?>

<h1>
    <?php
     // Calcule a média do array do exercício 1

     echo "Media do meu array e:". $soma/count($meuArray);

    ?>
</h1>    