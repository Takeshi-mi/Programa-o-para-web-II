<?php
$qualquer = $_SESSION['usuario'];
?>
<div class="container">
    <div class="row">
        <div class="col-6 text-start">
        <h1 class="text-center"> <?php echo "<h1>Bem vindo, " . $qualquer . "!!</h1>"; ?> </h1>
        <a class="btn btn-primary btn-lg m-3" target="_blank" href="relatorio\relatoriorestaurante.php">
                <!-- Ícone de Download -->
                <i class="bi bi-cloud-download"></i> Baixar Relatório
            </a>
    </div>
    </div>
    <div class="row">
        <img src=".\img\site\dashboard.webp" alt='dashboard' class='w-full h-48 object-cover' />
    </div>
</div>