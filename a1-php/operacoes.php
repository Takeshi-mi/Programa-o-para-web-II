<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Números</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Cálculo de Números</h1> 
        <div class="container">
        <div class="d-flex justify-content-center" style="height: 30vh;">
            <img src="einstein.jpg" class="img-fluid" alt="Imagem Responsiva">
        </div>
        </div>
        <form method="POST" action="operacoes.php">
            <div class="form-group">
                <label for="num1">Número 1:</label>
                <input required type="number" class="form-control" id="num1" name="num1" />
            </div>
            <div class="form-group">
                <label for="num2">Número 2:</label>
                <input required type="number" class="form-control" id="num2" name="num2" />
            </div>
            <div class="form-group">
                <label for="num3">Número 3:</label>
                <input required type="number" class="form-control" id="num3" name="num3" />
            </div>
            <div class="form-group">
                <label for="num4">Número 4:</label>
                <input required type="number" class="form-control" id="num4" name="num4" />
            </div>
            <button type="submit" class="btn btn-primary mt-2">Calcular</button>
            <button type="button" class="btn btn-secondary mt-2" id="btnPreencher">Preencher Aleatoriamente</button>
        </form>

    </div>
    <!-- Incluindo Bootstrap JS e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!--Parece que tem que ter isso aqui pra funfar o javascripto-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <!-- Script para preencher os campos aleatoriamente -->
    <script>
        $(document).ready(function() {
            $('#btnPreencher').click(function() {
                $('#num1').val(Math.floor(Math.random() * 100)); // Preenche com número aleatório de 0 a 100
                $('#num2').val(Math.floor(Math.random() * 100));
                $('#num3').val(Math.floor(Math.random() * 100));
                $('#num4').val(Math.floor(Math.random() * 100));
            });
        });
    </script>
</body>

</html>



<?php
/*
Faça um algoritmo em PHP que quatro números e,
calcule e mostre:
a. A soma dos números digitados
b. A quantidade de números digitados
c. A média dos números digitados
d. O maior número digitado
e. O menor número digitado
f. A média dos números pares
*/

if (isset($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'])) {
    $arrayNumeros = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4']);

    // Soma dos números
    $soma = array_sum($arrayNumeros);

    // Quantidade de números
    $quantidade = count($arrayNumeros);

    // Média dos números
    $media = $soma / $quantidade;

    // Maior número
    $maior = max($arrayNumeros);

    // Menor número
    $menor = min($arrayNumeros);

    //MEDIA DOS NÚMEROS PARES
    /* Vou fazer de 2 jeitos pra aprender. Um com lógica minha e função própria, e outro com função pronta do PHP. 
> A função mediaPares recebe como parâmetro o array de números que o usuário digiou e verifica se é par através da divisão modular por 2.
> Se for par é adicionado a um array de pares, que é somado com array_sum() e divido pela quantidade total count(). 
> Assim, não importa a quantidade de números, o código irá funcionar.
*/
    function mediaPares($arrayNumeros)
    {
        $numerosPares = array();
        foreach ($arrayNumeros as $numero) {
            if ($numero % 2 == 0) {
                array_push($numerosPares, $numero);
            }
        }
        $mediaPares = (count($numerosPares) > 0) ? array_sum($numerosPares) / count($numerosPares) : 0; //operador ternário pra validar divisão por 0
        return $mediaPares;
    }


    // Média dos números pares com FUNÇÃO ARRAY_FILTER() Essa função filtra com base em uma condição e cria um novo array.
    $numerosPares = array_filter($arrayNumeros, function ($numero) {
        return $numero % 2 == 0;
    });
    $mediaPares = 0;
    if (count($numerosPares) > 0) {
        $mediaPares = array_sum($numerosPares) / count($numerosPares);
    }



    // Mostrar os resultados
    echo var_dump($arrayNumeros);
    echo "<h2>&nbsp Resultados:</h2>";
    echo "&nbsp&nbsp a) Soma dos números: $soma <br/>";
    echo "&nbsp&nbsp b) Quantidade de números: $quantidade <br/>";
    echo "&nbsp&nbsp c) Média dos números: $media <br/>";
    echo "&nbsp&nbsp d) Maior número: $maior <br/>";
    echo "&nbsp&nbsp e) Menor número: $menor <br/>";
    echo "&nbsp&nbsp f) Média dos números pares: " . mediaPares($arrayNumeros) . " <br/>";
    echo "<br/> <br/> <br/>";
}






?>