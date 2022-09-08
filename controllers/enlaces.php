<?php

class Enlaces{
    public static function enlacesController(){
        if(isset($_GET["action"])){
            $enlace = $_GET["action"];
        }else{
            $enlace = "index";
        }

        $rpta = EnlacesModels::enlacesModel($enlace);

        include $rpta;

    }
}