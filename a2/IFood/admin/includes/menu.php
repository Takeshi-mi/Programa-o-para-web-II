<nav>
    <ul class="nav nav-pills justify-content-center flex-column ">
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'dashboard') ? 'active text-white bg-danger' : 'text-secondary'; ?> "href="?secao=dashboard">DASHBOARD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'cadComida') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=cadComida">CADASTRAR COMIDA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'listarComida') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=listarComida">GERENCIAR COMIDAS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'cadRestaurante') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=cadRestaurante">CADASTRAR RESTAURANTE</a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'listarRestaurantes') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=listarRestaurantes">GERENCIAR RESTAURANTES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'listarUsuarios') ? 'active text-white bg-danger' : 'text-secondary'; ?>"href="?secao=listarUsuarios">LISTAR USUÁRIOS</a>
        </li>
        <li class="nav-item mt-5">
            <a class="nav-link text-secondary" href="./logout.php">LOGOUT</a>
        </li> <hr/>
    </ul>
</nav>
<!-- Fiz uma maracutaia aí pra trocar a cor de fundo e a cor do texto com bootstrap quando o item de menu for pressionado.

Esse negócio de bootstrap é cheio de bug, credo kkkkk -->



    




