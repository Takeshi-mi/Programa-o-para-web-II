<?php
/*Codifique e execute um programa em PHP que contenha
uma função que receba como parâmetro um valor inteiro
e gere como saída n linhas com pontos de exclamação
conforme o exemplo abaixo (para n=5)
!
!!
!!!
!!!!
!!!!!
*/
echo "Vou fazer de 3 jeitos diferentes. 2 só na lógica e outro usando a função str_repeat() que descobri do php"."<br/> \n";
echo "<hr>";
echo "Concatenado a string em um loop for apenas:"."<br/>";
function escadinha($n)
{
    $simbolo = "♦";
    for ($i = 0; $i < $n; $i++) {
            echo $simbolo."<br/\n>"; //\n só funciona no terminal
            //$simbolo = $simbolo."♦";
            $simbolo .= "♦";
    }
}
escadinha(5);

echo "<br> \n";
echo "Com for aninhado:";
function escadaForAninhado($n){
    for($i=0;$i<=$n; $i++){
        $linha = "";
        for ($j = 0; $j < $i; $j++){
            $linha .= "♣";
        }
            echo $linha . "<br/>". PHP_EOL; // A constante PHP_EOL é para quebra de linha. Mas só funciona no temrinal";
    }
}

escadaForAninhado(5);
echo "<br/>";
echo "Usando a função pronta do PHP str_repeat('termo',quantidade): <br/>";
function repetirSimbolo($n){
    $sinal = "♠";
    for($i=1; $i<=$n; $i++){
        echo str_repeat($sinal,$i) ."<br/>";
        
    }
}

repetirSimbolo(15);