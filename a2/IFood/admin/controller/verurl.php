<?php
class VerUrl{
    function trocar_url ($url){
        if(empty($url)){
            $url =  "secoes/dashboard.php";
        }
        elseif($url === "ademiro"){
            $url = "admin/index.php";
        }
        else{
        $url = "secoes/$url.php";       
        }
        include_once($url);
    }
}




?>