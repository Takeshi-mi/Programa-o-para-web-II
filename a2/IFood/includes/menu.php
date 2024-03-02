<nav>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'home') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=home">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'cardapio') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=cardapio">CARDÁPIO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'restaurantesParceiros') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=restaurantesParceiros">RESTAURANTES PARCEIROS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'contato') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=contato">CONTATO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'ademiro') ? 'active text-white bg-danger' : 'text-secondary'; ?>" href="?secao=ademiro">LOGIN</a>
        </li>
    </ul>
</nav>
<!-- Fiz uma maracutaia aí pra trocar a cor de fundo e a cor do texto com bootstrap quando o item de menu for pressionado.

Esse negócio de bootstrap é cheio de bug, credo kkkkk -->