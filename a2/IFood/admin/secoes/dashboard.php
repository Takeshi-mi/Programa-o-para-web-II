<?php
$qualquer = $_SESSION['usuario'];
?>
<div class="container">
    <div class="row">
        <div class="col-6 text-start">
        <h1 class="text-center"> <?php echo "<h1>Bem vindo, " . $qualquer . "!!</h1>"; ?> </h1>
        <a class="btn btn-secondary btn-lg m-3" target="_blank" href="relatorio\relatoriogeral.php">
            <!-- Ícone de Download -->
            <i class="bi bi-cloud-download"></i> Baixar Relatório Geral
        </a>
        <a class="btn btn-primary btn-lg m-3" target="_blank" href="relatorio\relatoriorestaurante.php">
                <!-- Ícone de Download -->
                <i class="bi bi-cloud-download"></i> Baixar Relatório por restaurante
            </a>
    </div>
    </div>
    <div class="row">
        <img src="..\img\site\dashboard.jpeg" alt='dashboard' class='' />
    </div>
</div>