<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Avaliação</title>
    <style type="text/css" media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        
        * { 
            font-family: 'Roboto', sans-serif;
        }
        body{

            height: 100vh;
            background-color:#ffccf5;

        }


    </style>
</head>


<body>
    <h2>Resultado da Avaliação</h2>
    <hr>
    <?php
    // Definindo o gabarito das questões
    $gabarito = array(
        "questão1" => "a",
        "questão2" => "c",
        "questão3" => "c",
        "questão4" => "b"
    );

    // Inicializa o contador de acertos
    $acertos = 0;

    // Valida e verifica as respostas do forms
    foreach ($gabarito as $questao => $resposta) {
        if (isset($_POST[$questao]) && $_POST[$questao] === $resposta) {
            $acertos++;
        }
    }

    // Mostra o espelho da prova e o gabarito
    echo "<h3>Seu Espelho de Prova:</h3>";
    echo "<ul>";
    foreach ($gabarito as $questao => $resposta) {
        echo "<li><strong>$questao:</strong> ";
        if (isset($_POST[$questao])) {
            echo "Você respondeu: <strong>{$_POST[$questao]}</strong>. ";
            if ($_POST[$questao] === $resposta) {
                echo "<font color='green'>Correto</font>";
            } else {
                echo "<font color='red'>Incorreto</font>. O correto é: <strong>$resposta</strong>";
            }
        } else {
            echo "<font color='red'>Você não respondeu esta questão.</font>";
        }
        echo "</li>";
    }
    echo "</ul>";

    // Mostra a quantidade de acertos
    echo "<h3>Quantidade de Acertos: $acertos de " . count($gabarito) . "</h3>";
    ?>
    <hr>
    <a href="provaHtml.html">Voltar</a><br/><br/>
    <a href="../avaliacoes.html">Ir para o menu de avaliações</a>

</body>
</html>
