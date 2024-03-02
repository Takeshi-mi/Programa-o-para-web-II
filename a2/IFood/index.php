<?php
$page = isset($_GET['secao']) ? $_GET['secao'] : 'home';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <title>TKFood</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    <link rel="icon" href="img/site/logo icon.ico" type="image/png">
    <link rel='stylesheet' type='text/css'  href='css/bootstrap.css'/>
    <link rel='stylesheet' type='text/css'  href='css/estilo.css'/>

</head>
<body>
    <?php include("includes/header.php");?> 
    <?php include("includes/menu.php");?> 
    <main>
        <?php include_once("controller/verurl.php");
        $redirecionar = new VerUrl();
        $redirecionar-> trocar_Url(@$_GET['secao']);
        ?>




    </main>
    <?php include("includes/footer.php");?> 

    

    


    <script src='js/bootstrap.bundle.js'></script>
</body>

</html>