<?php
include_once("../../dao/manipuladados.php");
include_once("../../model/restaurante.php");

//Função para converter arquivos em algumas versões do windows. Se tiver um ISO, transforma em UTF para não problema de acentuação
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}

$restaurante = new Restaurante();
$alterar = new ManipulaDados();

$restaurante->setId($_POST['txtId']);
$restaurante->setNome($_POST['txtRestaurante']);
$restaurante->setDescricao($_POST['txtDescricao']);
$restaurante->setLocalizacao($_POST['txtLocalizacao']);
$restaurante->setCidade($_POST['txtCidade']);
$restaurante->setTelefone($_POST['txtTelefone']);

// Verificando se não está vazio
print_r($_FILES['arquivo']['size'] > 0);
if (isset($_FILES['arquivo'])) {

    // Esse eu salvo no banco
    $nomeArquivo = $_FILES['arquivo']['name'];
    $restaurante->setUrl("img/restaurantes/" . $nomeArquivo);

    // Esse eu salvo o arquivo no lugar dele usando a funcao pronta move
    $nomeArquivoSalvo = converte($_FILES['arquivo']['name']);
    $urlLocalSalvo = "../../img/restaurantes/" . $nomeArquivo;
    move_uploaded_file($_FILES["arquivo"]["tmp_name"], $urlLocalSalvo);
} else {
    // Se nenhum novo arquivo foi enviado, mantém a URL existente
    $restaurante->setUrl($_POST['txtUrl']);
}

$alterar->setTable('tb_restaurantes');
$alterar->setFields("nome='{$restaurante->getNome()}',descricao='{$restaurante->getDescricao()}',localizacao='{$restaurante->getLocalizacao()}',cidade='{$restaurante->getCidade()}',telefone='{$restaurante->getTelefone()}',url='{$restaurante->getUrl()}'");
$alterar->setFieldPk('id');
$alterar->setValuePk("{$restaurante->getId()}");
$alterar->update();

echo '<script> alert("' . $alterar->getStatus() . '");</script>';
header('location: ../principal.php?secao=listarRestaurantes');
