<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body class="mt-5 container bg-primary">
    <h1>Cálculo do IMC</h1>
    <form class="form-group" method="POST" action="calculoIMC.php">
    <form class="form-group" method="POST" action="calculoIMC.php">
        <label for="altura">Altura (m): </label>
        <input  required type="text" name="altura" id="altura" class="form-control" placeholder="0.00"><br><br>
        <label for="peso">Peso (kg): </label>
        <input required type="text" name="peso" id="peso" class="form-control" placeholder="0.00"><br><br>

        <button type="submit" class="btn btn-success">Calcular IMC</button>
    </form>
</body>

</html>

<?php
/* Faça um algoritmo em PHP que dada a altura e o peso,
calcule o IMC(p/a2) e imprima:
 IMC <=18,5 – Abaixo do peso
 IMC>18,5 e IMC<=25 – Peso normal
 IMC>25 e <=30 – Acima do Peso
 IMC>30 – Obeso*/
// Função para calcular o IMC
function calcularIMC($altura, $peso)
{
    // Verifica se altura e peso são válidos
    if ($altura > 0 && $peso > 0) {
        $imcCalc = $peso / ($altura * $altura);
        $imc = number_format($imcCalc, 2);  // Formata para dois decimais

        if ($imc <= 18.5) {
            return "Seu IMC é de <strong>{$imc} kg/m²</strong>, você está abaixo do peso.";
        } elseif ($imc <= 25) {
            return "Seu IMC é de <strong>{$imc} kg/m²</strong>, você tem peso normal.";
        } elseif ($imc <= 30) {
            return "Seu IMC é de <strong>{$imc} kg/m² </strong>e você está acima do peso.";
        } else {
            return "Seu IMC é de <strong>{$imc} kg/m²</strong> e você está obeso.";
        }
    } else {
        return "Altura e peso devem ser valores positivos.";
    }
}

// Verifica se os campos foram preenchidos, ai desaparece o bug dos warning na tela
if (isset($_POST["altura"],$_POST["peso"])) {
    $altura = floatval($_POST["altura"]); // floatval vai castar a string para float
    $peso = floatval($_POST["peso"]);


    $resultado = calcularIMC($altura, $peso);
    echo $resultado;
}
?>