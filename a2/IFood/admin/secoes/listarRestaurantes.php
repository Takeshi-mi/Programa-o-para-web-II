<?php
include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();

?>
<div class="container">
<h1 class="text-black-50">Gerenciar restaurantes</h1>
    <hr />


    <section>

        <form method="POST" action="controller/manterrestaurante.php">
            <table id="tabela-restaurantes" class="table table-striped table-hover" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Localização</th>
                        <th>Cidade</th>
                        <th>Telefone</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
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
                        <input type="hidden" name="txtId" value="<?= $restaurante['id'] ?>" />
                        <td>
                            <button type="submit" name="botao" class="btn btn-transparent" value="editar"><i class="fa-regular fa-pen-to-square text-warning"></i></button>
                        </td>
                        <td>
                            <button type="submit" name="botao" class="btn btn-transparent" value="excluir"><i class="fa-regular fa-trash-can text-danger"></i></button>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </form>
    </section>

</div>