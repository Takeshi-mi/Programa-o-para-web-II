<?php
include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_usuario");
$lista = $dados->getAllDataTable();

?>
<div class="container">
    <h2 class="display-5 mb-5">Lista de usuários </h2>
    <hr />
    <section>
        <table id="tabela-usuarios" class="table table-striped table-hover" width="80%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <?php
            foreach ($lista as $usuario) {
            ?>
                <tr>
                    <td>
                        <?= $usuario['nome'] ?>
                    </td>
                    <td>
                        <?= $usuario['email'] ?>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </section>

</div>