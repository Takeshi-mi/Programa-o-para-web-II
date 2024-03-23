<?php
include_once("../../dao/manipuladados.php");
include_once("../../model/comida.php");

//Função para converter arquivos em algumas versões do windows. Se tiver um ISO, transforma em UTF para não problema de acentuação
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}

$manipulador = new ManipulaDados();
$comida = new Comida();

$comida->__set('nome',$_POST['txtNome']);
$comida->__set('descricao', $_POST['txtDescricao']);
$comida->__set('preco', $_POST['txtPreco']);
$comida->__set('estoque', $_POST['txtEstoque']);
$comida->__set('categoria', $_POST['txtCategoria']);
$comida->__set('ingredientes', $_POST['txtIngredientes']);

// Esse eu salvo no banco
$nomeArquivo = $_FILES['arquivo']['name'];
$comida->__set("url","img/comidas/" . $nomeArquivo);

// Esse eu salvo o arquivo no lugar dele usando a funcao pronta move
$nomeArquivoSalvo = converte($_FILES['arquivo']['name']);
$urlLocalSalvo = "../../img/comidas/" . $nomeArquivo;
move_uploaded_file($_FILES["arquivo"]["tmp_name"], $urlLocalSalvo);



$manipulador->setTable('tb_comidas');
$manipulador->setFields('nome,descricao,preco,estoque,categoria,ingredientes,url');


$manipulador->setDados("'{$comida->__get('nome')}','{$comida->__get('descricao')}','{$comida->__get('preco')}','{$comida->__get('estoque')}','{$comida->__get('categoria')}','{$comida->__get('ingredientes')}','{$comida->__get('url')}'");
$manipulador->insert();

echo '<script> alert("'.$manipulador->getStatus().'");</script>';
header('location: ../principal.php');
?>

