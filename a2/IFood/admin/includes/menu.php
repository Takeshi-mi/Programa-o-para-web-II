<nav>
    <ul class="nav nav-pills justify-content-center flex-column ">
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'dashboard') ? 'active text-white bg-danger' : 'text-secondary'; ?> "href="?secao=dashboard">DASHBOARD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'cadComida') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=cadComida">CADASTRO DE COMIDA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'updateComida') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=updateComida">UPDATE COMIDA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'cadRestaurante') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=cadRestaurante">CADASTRAR RESTAURANTE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'updateRestaurante') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=updateRestaurante">UPDATE RESTAURANTE</a>
        </li>
        <li class="nav-item mt-5">
            <a class="nav-link text-secondary" href="../index.php?secao=ademiro">LOGOUT</a>
        </li>
    </ul>
</nav>
<!-- Fiz uma maracutaia aí pra trocar a cor de fundo e a cor do texto com bootstrap quando o item de menu for pressionado.

Esse negócio de bootstrap é cheio de bug, credo kkkkk -->



    




