<?php
class VerUrl{
    function trocar_url ($url){
        if(empty($url)){
            $url =  "secoes/home.php";
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