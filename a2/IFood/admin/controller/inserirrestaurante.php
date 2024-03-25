<?php
include_once("../../dao/manipuladados.php");
include_once("../../model/restaurante.php");

//Função para converter arquivos em algumas versões do windows. Se tiver um ISO, transforma em UTF para não problema de acentuação
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}

$inserir = new ManipulaDados();
$restaurante = new Restaurante();

$restaurante->setNome($_POST['txtRestaurante']);
$restaurante->setDescricao($_POST['txtDescricao']);
$restaurante->setLocalizacao($_POST['txtLocalizacao']);
$restaurante->setCidade($_POST['txtCidade']);
$restaurante->setTelefone($_POST['txtTelefone']);

// Esse eu salvo no banco
$nomeArquivo = $_FILES['arquivo']['name'];
$restaurante->setUrl("img/restaurantes/" . $nomeArquivo);

// Esse eu salvo o arquivo no lugar dele usando a funcao pronta move
$nomeArquivoSalvo = converte($_FILES['arquivo']['name']);
$urlLocalSalvo = "../../img/restaurantes/" . $nomeArquivo;
move_uploaded_file($_FILES["arquivo"]["tmp_name"], $urlLocalSalvo);





$inserir->setTable('tb_restaurantes');
$inserir->setFields('nome,descricao,localizacao,cidade,telefone,url');
//$inserir->setDados($restaurante->getNome() . ',' . $restaurante->getDescricao() . ',' . $restaurante->getLocalizacao() . ',' . $restaurante->getCidade() . ',' . $restaurante->getTelefone() . ',' . $restaurante->getUrl());
/*$dados = array(
    'nome' => $restaurante->getNome(),
    'descricao' => $restaurante->getDescricao(),
    'localizacao' => $restaurante->getLocalizacao(),
    'cidade' => $restaurante->getCidade(),
    'telefone' => $restaurante->getTelefone(),
    'url' => $restaurante->getUrl()
);

$inserir->setDados("".implode(', ' ,$dados));
*/
$inserir->setDados("'{$restaurante->getNome()}','{$restaurante->getDescricao()}','{$restaurante->getLocalizacao()}','{$restaurante->getCidade()}','{$restaurante->getTelefone()}','{$restaurante->getUrl()}'");
$inserir->insert();
//echo $inserir->getDados();
//echo $inserir->getStatus();
echo '<script> alert("'.$inserir->getStatus().'");</script>';
header('location: ../principal.php?secao=cadRestaurante');
?>

