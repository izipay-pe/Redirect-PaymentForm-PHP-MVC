<?php

class EnlacesModels{
    public static function enlacesModel(string $modules){
        if( $modules == "infoPayment" ||
            $modules == "pagoFinalizado"){
            $ruta = "views/modules/$modules.php";
        }else{
            $ruta = "views/modules/products.php";
        }
        return $ruta;
    }
}