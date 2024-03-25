<?php
session_start();
$qualquer = $_SESSION['usuario'];

//Colocar os cookies
include_once("validarcookies.php");
?>
<?php $page = isset($_GET['secao']) ? $_GET['secao'] : 'dashboard';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>MyFood</title>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link rel="icon" href="img/site/logo icon.ico" type="image/png">
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
    <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css' />
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='css/estilo.css' />
    <!--  FontAwesome: biblioteca de ícones-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php include("includes/header.php"); ?>



    <div class="container-fluid">
        <div class="row">
            <!-- Menu Vertical -->
            <div class="col-md-2 border-right">
                <?php include("includes/menu.php"); ?>
            </div>

            <!-- Conteúdo Principal -->
            <div class="col-md-10">
                <main>
                    <?php
                    include_once("controller/verurl.php");
                    $redirecionar = new VerUrl();
                    $redirecionar->trocar_Url(@$_GET['secao']);
                    ?>
                </main>
            </div>
        </div>
    </div>
    </main>
    <?php include("includes/footer.php"); ?>






    <script src='https://code.jquery.com/jquery-3.7.1.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdn.datatables.net/2.0.2/js/dataTables.js'></script>
    <script src='https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js'></script>


    <script>
        new DataTable('#tabela-usuarios');
        new DataTable('#tabela-restaurantes');
    </script>
</body>

</html>