<?php
include_once("./dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_comidas");
$lista = $dados->getAllDataTable();

?>
<div class="container">
    <hr />
    <div class="row">
        <?php
        $count = 0;
        foreach ($lista as $comida) {
            // Abre uma nova linha a cada 3 cards
            if ($count % 3 == 0) {
                echo '</div><div class="row">';
            }
        ?>
        
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src='<?= $comida['url'] ?>' alt="Imagem do comida">
    
                    <div class="card-body">
                        <h4 class="card-title">  <?= $comida['nome'] ?></h4>
                        <p class="card-text">  <?= $comida['descricao'] ?></p>
                        <p class="card-text"><strong> Categoria:</strong><span class="badge badge-primary"> <?= $comida['categoria']  ?> </span> </p>               
                    </div> <!--card-body-->
                    <div class="card-footer">
                        <small class="text-muted">R$<?= $comida['preco']?></small>
                    </div> <!--card-footer-->
                </div> <!--card -->
            </div> <!--col-md-4-->

        <?php
            $count++;
        }
        ?>
    </div> <!--row-->
</div>
