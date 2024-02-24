<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando variáveis</title>
</head>

<body>
    <h1>Modificando variáveis passando a &$REFERÊNCIA</h1>
    <form method="GET" action="modificarNumeros.php">
        <label for="num1">Num1:</label>
        <input required type="number" id="num1" name="num1" />
        <label for="num2">Num2:</label>
        <input required type="number" id="num2" name="num2" />
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
<?php
/*
Codifique e execute um programa que contenha uma
função que permita passar por parâmetro dois números
inteiros. A função deve calcular a soma entre esses dois
números e armazenar o resultado no primeiro número.
Esta função não deverá possuir retorno, mas deverá
modificar o valor do primeiro número. Após isso imprima
os dois números fora da função.
*/

if (isset($_GET['num1'], $_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    function calculate(&$num1, $num2)
    { //alterando pela referência da variável com o &$
        $num1 += $num2;
    }
    echo "<br/>";
    echo "<hr/>";
    echo "<br/>";

    echo "Valores antes da função: <br/>
    num1: $num1 <br/>
    num2: $num2 <br/>";
    echo var_dump($num1, $num2);
    echo "<br/>";
    echo "<br/>";
    calculate($num1, $num2);

    echo "<hr/>";
    echo "<br/>";
    echo "Após a função: <br/>";
    echo "O novo valor de Num 1 é: " . $num1 . "<br>";
    echo "O valor de Num 2 permanece igual: " . $num2;
    echo "<br/>";
    echo var_dump($num1, $num2);


}
?>