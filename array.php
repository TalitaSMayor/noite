<?php
    $carros = array(); //função nativa, transforma a variável em vetor, no caso a variável carros em uma lista 
    $carros = array("BMW", "Saveiro", "Gol", "Palio");
    //echo "<br>";
    //echo $carros[1];
    //echo "<br>";
    //echo $carros[0];
    echo "<pre>";
    print_r($carros); //vai ler todos os carros, fazendo um debug forçado mostrando tudo o que tem naquela variável
    echo "</pre>"; //pre deixa em coluna para ficar mais visivel e organizado

    $nomes = ["Fernando", "Maria", "Joao", "Pedro"]; //ao colocar em colchetes ele entende que aquela variável virou array

    $nomes[675] = "Julia";
    $nomes[465] = "Matheus";
    $nomes[34] = "Luis Fernando";
    
    echo "<pre>";
    print_r($nomes); 
    echo "</pre>";
    $salas = array("Lab01" => 40, "Lab02" => 32); //Quando se quer renomear indices como ao inves de ser 0, ser Lab01, Lab02....Usa quando busca string ao inves de valor
    $salas["Lab03"] = 30;
    
    $salas[0] = "24"; //pode colocar pq o indice 0 nao existia

    echo "<pre>";
    print_r($salas); 
    echo "</pre>";

    echo $salas["Lab02"];//outra maneira de imprimir o resultado fora do array


    $tabuada = array(0,1,2,3,4);

    $tabuada[0] = array(0,1,2,3,4); //array dentro de outro array
    $tabuada[1] = array(0,1,2,3,4);
    $tabuada[2] = array(0,1,2,3,4);
    $tabuada[3] = array(0,1,2,3,4);

    $tabuada[4] = array();
    $tabuada[4][0] = 0; //matriz dentro do array mostrando resultado da multiplicação
    $tabuada[4][1] = 4;
    $tabuada[4][2] = 8;
    $tabuada[4][3] = 12;
    $tabuada[4][4] = 16;

    echo"<pre>";
    print_r($tabuada);
    echo"</pre>";

    // Faça um array armarios para guardar: joias, material eletrico e ferragem

    $armarios = array("Joias", "Eletronicos", "Ferragem");

    $armarios[0] = "Joias";
    $armarios[1] = "Eletronicos";
    $armario[2] = "Ferragem";

    echo"<pre>";
    print_r($armarios);
    echo"</pre>";
    
    // Resolução do professor

    $armarios = array();
    $armarios["Porta1"] = array("Fio 2m", "Fio 4m", "Fio Terra"); //poderia colocar todas assim, mas depois de criar o código tem que colocar a maneira abaixo com push
    $armarios["Porta2"] = array();
    $armarios["Gavetinha"] = array();

    array_push($armarios["Gavetinha"], "Brincos"); //adiciona elemento no final do array/vetor. Maneira de colocar item novo depois do código já estar criado
    array_push($armarios["Gavetinha"], "Aneis");
    array_push($armarios["Gavetinha"], "Correntes");
    array_push($armarios["Gavetinha"], "Pulseiras");

    $armarios["Porta2"][0] = "Porca"; //Fez em maneira de matriz 
    $armarios["Porta2"][1] = "Parafuso";
    $armarios["Porta2"][2] = "Arruela";

    echo "<pre>";
    print_r($armarios);
    echo "</pre>";
    

?>    