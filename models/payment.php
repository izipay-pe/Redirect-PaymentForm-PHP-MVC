<?php

class PaymentModel {
    private static $_DEFAULT_SHOP_ID = null;
    private static $_DEFAULT_TEST_KEY = null;
    private static $_DEFAULT_PROD_KEY = null;
    private static $_DEFAULT_URL_PAYMENT = null;
    private static $_DEFAULT_MODE = null;

    private $_SHOP_ID = null;
    private $_TEST_KEY = null;
    private $_PROD_KEY = null;
    private $_URL_PAYMENT = null;
    private $_MODE = null;

    public function __construct()
    {
      $this->_SHOP_ID = self::$_DEFAULT_SHOP_ID;
      $this->_TEST_KEY = self::$_DEFAULT_TEST_KEY;
      $this->_PROD_KEY = self::$_DEFAULT_PROD_KEY;
      $this->_URL_PAYMENT = self::$_DEFAULT_URL_PAYMENT;
      $this->_MODE = self::$_DEFAULT_MODE;
    }

    public static function getShopId(){
        return self::$_DEFAULT_SHOP_ID;
    }

    public static function getKey(){
        if(self::$_DEFAULT_MODE=="TEST") return self::$_DEFAULT_TEST_KEY;
        if(self::$_DEFAULT_MODE=="PROD") return self::$_DEFAULT_PROD_KEY;
    }

    public static function getUrlPayment(){
        return self::$_DEFAULT_URL_PAYMENT;
    }

    public static function getMode(){
        return self::$_DEFAULT_MODE;
    }

    public static function setDefaultShopId($shoId){
        static::$_DEFAULT_SHOP_ID = $shoId;
    }

    public static function setDefaultTestKey($key){
        static::$_DEFAULT_TEST_KEY = $key;
    }

    public static function setDefaultProdKey($key){
        static::$_DEFAULT_PROD_KEY = $key;
    }

    public static function setDefaultUrlPayment($url){
        static::$_DEFAULT_URL_PAYMENT = $url;
    }

    public static function setDefaultMode($mode){
        static::$_DEFAULT_MODE = $mode;
    }
   
      //FUNCION para obtener el signature
    public static function  getSignature($params, $keys)
    {
        $content_signature = "";
        // Ordenar los campos alfabéticamente
        ksort($params);
        foreach ($params as $name => $value) {
            // Recuperación de los campos vads_
            if (substr($name, 0, 5) == 'vads_') {
            // Concatenación con el separador "+"
            $content_signature .=  $value . "+";
            }
        }
        // Añadir la clave al final del string
        $content_signature .= $keys;
        // Codificación base64 del string cifrada con el algoritmo HMAC-SHA-256
        $signature = base64_encode(hash_hmac('sha256', utf8_encode($content_signature), $keys, true));
        return $signature;
    }

}