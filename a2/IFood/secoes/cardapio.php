<style>
.position-relative {
    position: relative;
}

.card-img-top {
    transition: transform 0.3s ease;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 1rem;
    opacity: 0;
    transition: opacity 0.3s ease, border-color 0.3s ease-in;
}

.position-relative:hover .card-img-top {
    border: 2px solid #ff6347;
    transform:translate(0,0px) scale(1.02); /* You can use any type of animation */
}

.position-relative:hover .card-img-overlay {
    opacity: 1;

}
    
</style>
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
                        <div class="card shadow mb-4 ">
                            <!-- Estilização para aparecer informações ao passar o mouse em cima da imagem -->
                            <div class="position-relative">
                                <img class="card-img-top" src='<?= $comida['url'] ?>' alt="Imagem do comida">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Ingredientes:</h5>
                                    <p class="card-text"><?= $comida['ingredientes'] ?></p>
                                </div>
                            </div> <!-- position-relative-->

                            <div class="card-body">
                                <h4 class="card-title"> <?= $comida['nome'] ?></h4>
                                <p class="card-text"> <?= $comida['descricao'] ?></p>
                                <p class="card-text"><strong> Categoria:</strong><span class="badge badge-primary"> <?= $comida['categoria']  ?> </span> </p>
                            </div> <!--card-body-->
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="adicionarAoCarrinho(<?= $comida['id'] ?>, '<?= $comida['nome'] ?>', <?= $comida['preco'] ?>)">Adicionar ao Carrinho</button>
                                        <!-- Botão de detalhes ou outras ações -->
                                    </div>
                                    <small class="text-muted">R$<?= $comida['preco'] ?></small>
                                </div>
                            </div> <!--card-footer-->
                        </div> <!--card shadow -->
                    </div> <!--col-md-4-->

                <?php
                $count++;
            }
                ?>
                </div> <!--row-->
            </div>


            <!-- Script para adicionar ao carrinho (a ser implementado em breve hehe Me ensina como faz Afrânio) -->
            <script>
                function adicionarAoCarrinho(id, nome, preco) {
                    console.log("Adicionando ao carrinho: ID=" + id + ", Nome=" + nome + ", Preço=" + preco);
                }
            </script>