
<?php
session_start();

$qualquer = $_SESSION['usuario'];
?>
<?php $page = isset($_GET['secao']) ? $_GET['secao'] : 'dashboard' ;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <title>MyFood</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    <link rel="icon" href="img/site/logo icon.ico" type="image/png">
    <link rel='stylesheet' type='text/css'  href='css/bootstrap.css'/>
    <link rel='stylesheet' type='text/css'  href='css/estilo.css'/>

</head>
<body>
    <?php include("includes/header.php");?> 


<h1 class="text-primary text-center"> <?php echo "<h1>Bem vindo, ". $qualquer."!!</h1>";?> </h1>
    <div class="container-fluid">
        <div class="row">
            <!-- Menu Vertical -->
            <div class="col-md-2 border-right">
                <?php include("includes/menu.php");?> 
            </div>
            
            <!-- Conteúdo Principal -->
            <div class="col-md-10">
                <main>
                    <?php
                    include_once("controller/verurl.php");
                    $redirecionar = new VerUrl();
                    $redirecionar-> trocar_Url(@$_GET['secao']);
                    ?>
                </main>
            </div>
        </div>
    </div>
    </main>
    <?php include("includes/footer.php");?> 

    

    


    <script src='js/bootstrap.bundle.js'></script>
</body>

</html>