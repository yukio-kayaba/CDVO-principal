<?php
    class ModeloControlador{
        public function __construct(){}
        
        static function inicio(){
            require_once("./view/principal.php");
        }
        static function errorPagina(){
            require_once("./view/error_pag.php");
        }
        static function nosotros(){
            require_once("./view/nosotros.php");
        }
        static function servicios(){
            require_once("./view/servicios.php");
        }
        static function academy(){
            require_once("./view/academy.php");
        }
    }
?>