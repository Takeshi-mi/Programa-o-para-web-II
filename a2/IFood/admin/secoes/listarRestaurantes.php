<?php
include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_usuario");
$lista = $dados->getAllDataTable();

?>
<section>
<?php
foreach ($lista as $restaurante){
?>
    <h1> <?= $restaurante['ID'] ?></h1>
    <h1> <?= $restaurante['nome'] ?></h1>
    <h1> <?= $restaurante['descrição'] ?></h1>
<?php
}
?>
</section>

tb_restaurante
id nome descrição  categoria url  

