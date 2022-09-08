<?php

// Identificador de su tienda
PaymentModel::setDefaultShopId("12345678");

// Clave de TEST y Producción de su Back Office Vendedor.
PaymentModel::setDefaultTestKey("2222222222222222");
PaymentModel::setDefaultProdKey("3333333333333333");

// URL de la plataforma de pago
PaymentModel::setDefaultUrlPayment("https://secure.micuentaweb.pe/vads-payment/");

// Modo de Configuración
PaymentModel::setDefaultMode("TEST");
