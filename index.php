<h1>
    <?php
    // Comentarios em PHP - Linha
    /*

    */
    //echo "Hello world - Meu nome é Talita";  // aqui é obrigatorio colocar o ; no final
    $idade = 26;
    $nome = "Talita";
    $altura = 1.53;
    $solteiro = true;
    //$solteiro = 1;
    // o php tem case sensitivo, portanto ele entende como duas variaveis diferentes. Ex: Nome e nome.
    // se colocar solteiro = 1, ta declarando ele como 1 e como true, pois ele usa o boleano. E nesse caso 0 é considerado false.
    //echo $solteiro;
    //echo 10 < 12;
    /*CONST IDADE = 10; // no php se quiser seguir a convenção das boas práticas, tem que deixar maiusculo 
    echo IDADE;
    if(10 > 12)
    {
        echo "mentira";
    }
    else{
        echo "10 nao e maior que 12";
    }
    $nota1 = 6;
    if($nota1 >= 6)
    {
        echo "Aprovado";
    }
    else if($nota1 < 6 && $nota1 >= 2){
        echo "Ainda tem chance";
    }

    // Faca um if e calcule a media e escreva na tela se foi aprovado ou nao 
    */
    $nota1 = 8;
    $nota2 = 9;

    $media = ($nota1 + $nota2)/2;
    if($media >= 6)
    {
        echo "Aprovado";
    }
    else{
        echo "Reprovado";
    } 

        //$media = $nota1 + $nota2;

            //$media /= 2;                      Ele vai pegar a soma feita antes e dividir por 2;

            //$soma += 3;                       Soma o valor do calculo anterior com +3

            //$sub -= 3;                         Subtrai o valor do calculo anterior com -3

            //mult *= 3;                        Multiplica o valor do calculo anterior com * 3

            // Seria igual soma + soma, sub - sub, mult * mult;
            /* No PHP é possivel encontrar o ===, representa que o valor e o tipo são iguais

                1 == "1"        São tipos diferentes (numero e string); Retornaria true (talvez, professor ta na duvida)

                1 ==== "1" = falso         Porque são tipos diferentes, então retornaria false

            */
             //if (!10 > 12) {}    ! - inverte o resultado do teste lógico
             // Concatenacao
             $nome = "teste";
             echo "<br> <br> Tali" . $nome . "ta" . "<br>";

             //Loop em PHP
             $contadora = 0;
             do{
                 //codigo a ser repetido
                 $contadora ++;
             }while($contadora < 10);

             while($cont < 10){
                 //executa os codigos
                 $cont++;
             }

             for($i = 0; $i < 10; $i++){
                 //Executar os codigos
                 if($i % 2 == 0){
                     echo "<p>" .$i. " é par</p>";
                 }else{
                     echo "<p>" .$i. " é impar</p>";
                 }
             }
    ?>
</h1>    