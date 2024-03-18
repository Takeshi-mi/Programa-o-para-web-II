<?php
include_once("./dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();

?>
<div class="container">

    <hr />
    <div class="card-columns">
        <?php
        foreach ($lista as $restaurante) {
        ?>
        
            <div class="card">
                <img class="card-img-top" src='<?= $restaurante['url'] ?>' alt="Imagem do restaurante">
   
                <div class="card-body">
                    <h4 class="card-title">  <?= $restaurante['nome'] ?></h5>
                    <p class="card-text">  <?= $restaurante['descricao'] ?></p>
                    <p class="card-text"><strong> Cidade:</strong> <?= $restaurante['cidade']  ?> </p>
                    <p class="card-text"> <strong>Localização: </strong><?= $restaurante['localizacao']  ?></h6>
                    <p class="card-text"> <strong>Telefone: </strong><?= $restaurante['telefone']  ?></h6>
               
                </div> <!--card-body-->
                <div class="card-footer">
                    <small class="text-muted">★★★★☆</small>
                </div> <!--card-footer-->
            </div> <!--card -->

        <?php
        }
        ?>
    </div> <!--card-column-->
</div>