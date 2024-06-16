<?php
include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_comidas");
$lista = $dados->getAllDataTable();

?>
<div class="container">
    <h1 class="text-black-50">Gerenciar comidas</h1>
    <hr />


    <section>

        <table id="tabela-comidas" class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Estoque</th>
                    <th>Ingredientes</th>
                    <th>Categoria</th>
                    <th>Foto</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <?php
            foreach ($lista as $comida) {
            ?>

                <tr>
                    <td>
                        <?= $comida['id'] ?>
                    </td>
                    <td>
                        <?= $comida['nome'] ?>
                    </td>
                    <td>
                        <?= $comida['descricao'] ?>
                    </td>
                    <td>
                        <?= $comida['estoque'] ?>
                    </td>
                    <td>
                        <?= $comida['ingredientes'] ?>
                    </td>
                    <td>
                        <?= $comida['categoria'] ?>
                    </td>
                    <td>
                        <img style="width: 150px; height: 150px;" src="../<?= $comida['url'] ?>" alt="Imagem do comida">
                    </td>

                    <input type="hidden" name="txtId" value="<?= $comida['id'] ?>" />
                    <input type="hidden" name="txtNome" value="<?= $comida['nome'] ?>" />
                    <input type="hidden" name="txtDescricao" value="<?= $comida['descricao'] ?>" />
                    <input type="hidden" name="txtEstoque" value="<?= $comida['estoque'] ?>" />
                    <input type="hidden" name="txtIngredientes" value="<?= $comida['ingredientes'] ?>" />
                    <input type="hidden" name="txtCategoria" value="<?= $comida['categoria'] ?>" />
                    <input type="hidden" name="txtUrl" value="<?= $comida['url'] ?>" />

                    <td>
                        <form method="post" action="controller/mantercomida.php">
                            <button type="submit" name="botao" class="btn btn-transparent" value="editar"><i class="fa-regular fa-pen-to-square text-warning"></i></button>
                            <input type="hidden" name="txtId" value="<?= $comida['id'] ?>" />
                            <input type="hidden" name="txtNome" value="<?= $comida['nome'] ?>" />
                            <input type="hidden" name="txtDescricao" value="<?= $comida['descricao'] ?>" />
                            <input type="hidden" name="txtEstoque" value="<?= $comida['estoque'] ?>" />
                            <input type="hidden" name="txtIngredientes" value="<?= $comida['ingredientes'] ?>" />
                            <input type="hidden" name="txtCategoria" value="<?= $comida['categoria'] ?>" />
                            <input type="hidden" name="txtUrl" value="<?= $comida['url'] ?>" />

                        </form>

                    </td>
                    <td>
                        <form method="post" action="controller/mantercomida.php">
                            <button type="submit" name="botao" class="btn btn-transparent" value="excluir"><i class="fa-regular fa-trash-can text-danger"></i></button>
                            <input type="hidden" name="txtId" value="<?= $comida['id'] ?>" />
                            <input type="hidden" name="txtNome" value="<?= $comida['nome'] ?>" />
                            <input type="hidden" name="txtDescricao" value="<?= $comida['descricao'] ?>" />
                            <input type="hidden" name="txtEstoque" value="<?= $comida['estoque'] ?>" />
                            <input type="hidden" name="txtingredientes" value="<?= $comida['ingredientes'] ?>" />
                            <input type="hidden" name="txtCategoria" value="<?= $comida['categoria'] ?>" />
                            <input type="hidden" name="txtUrl" value="<?= $comida['url'] ?>" />

                        </form>
                    </td>
                </tr>


            <?php
            }
            ?>
        </table>

    </section>

</div>