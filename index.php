<?php
    require_once("./controller/controlador.php");
    require_once("./config.php");
    session_start();
    if(isset($_GET['vista'])){
        $url = explode("/",$_GET['vista']);
        
        if(method_exists("ModeloControlador",$url[0])){
            ModeloControlador::{$url[0]}();
        }else{
            ModeloControlador::errorPagina();
        }
    }else{
        ModeloControlador::inicio();
    }
?>