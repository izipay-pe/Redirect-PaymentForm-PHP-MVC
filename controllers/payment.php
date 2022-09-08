<?php
class PaymentController {


  public static function initPayment(){
    date_default_timezone_set("UTC");
    if(isset($_POST["amount"])){
      $datos = array(
        "vads_action_mode" => "INTERACTIVE",
        "vads_amount" => $_POST["amount"]*100,
        "vads_ctx_mode" => PaymentModel::getMode(),
        "vads_currency" => "604", // Moneda PEN
        "vads_cust_email" => $_POST["email"],
        "vads_page_action" => "PAYMENT",
        "vads_payment_config" => "SINGLE",
        "vads_site_id" => PaymentModel::getShopId(), //id de tienda  8910212
        // "vads_url_success" => "http://localhost/000webhost/Redirect-form-php/pagoFinalizado.php",
        "vads_url_success" => "http://localhost:8080/pagoFinalizado.php",
        "vads_return_mode"=> "POST",
        "vads_trans_date" => date("YmdHis"), //Fecha en formato UTC
        "vads_trans_id" =>  substr(md5(time()), -6),      //"af491z",
        "vads_version" => "V2",
        "vads_order_id" => uniqid("MyOrderId"),
        "vads_redirect_success_timeout" => 5//Definir tiempo de redirección
      );

      $datos["signature"] = PaymentModel::getSignature($datos, PaymentModel::getKey());

      return $datos;
    }
    
  }

  public static function getUrlPayment(){
    return PaymentModel::getUrlPayment();
  }

}