<?php
//Teste array e listas 
//arrays Númericos
echo "<strong>Arrays</strong> <br/>";
$alunos = array("Takeshi","Naoki","Everton","Sara","Hendrew","Wesley");
echo var_dump($alunos)."<br>" ; //mostra o conteudo do vetor

$totalAlunos = count($alunos);
echo "A quantidade total de alunos é: $totalAlunos"."<br>";

echo "<hr>";

//Arrays associativos: Chave não é numérica. Parece um dicionário
$pessoa = array("nome"=> "Takeshi", "idade"=> 22,"curso"=> "TADS");
echo $pessoa["nome"];
echo "<br>";
//Foreach para percorrer cada elemento do array
foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo is_array($pessoa);
echo in_array("Everton",$alunos) ? "Sim, Everton está na lista":"Não, Everton não está na lista";
echo "<hr>";

echo "<br>"."<hr>";
echo "Lista\n";
//Lista
//Atribuição multipla do hphp 7.1 em diante. Não precisa do list($a,$b) mais. Basta colocar em colchetes
[$a, $b] = array("d","e");

echo "$a, $b <br>".

$arr=array(1=>"um",3=>"tres","a"=>"letraA",2=>"dois");
list($a,$b,$c,$d) = $arr;
echo $c, $d;
echo "<hr>";
echo "<hr>";
/*
 * Listas são mais utilizadas em funções que recebe vários parâmetros
 */
   
#FUNÇÕES PHP (kkkk dá pra fazer comentário de todo jeito # // /*)
function imprime($texto){
    echo $texto;
    }
    imprime("<strong> Testando funções</strong> <br/>");
    echo 'Para consultar outras funções nativas consulte a documentação oficial do PHP clicando nesse <a href="https://www.php.net/manual/pt_BR/">link</a>.';



