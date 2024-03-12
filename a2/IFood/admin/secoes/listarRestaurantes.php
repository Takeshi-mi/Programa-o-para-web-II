<?php
include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();

?>
<div class="container">
<h2 class="display-5 mb-5">Restaurantes Filiais </h2>
<hr/>


<section>
    <table id="tabela-restaurantes" class="table table-striped table-hover" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Localização</th>
                <th>Cidade</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <?php
        foreach ($lista as $restaurante) {
        ?>
            <tr>
                <td>
                    <?= $restaurante['id'] ?>
                </td>
                <td>
                    <?= $restaurante['nome'] ?>
                </td>
                <td>
                    <?= $restaurante['descricao'] ?>
                </td>
                <td>
                    <?= $restaurante['localizacao'] ?>
                </td>
                <td>
                    <?= $restaurante['cidade'] ?>
                </td>
                <td>
                    <?= $restaurante['telefone'] ?>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
</section>

</div>