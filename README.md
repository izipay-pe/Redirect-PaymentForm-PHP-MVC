# Redirect-Payment-Form-PHP-MVC

Ejemplo del formulario de pago en redirección con el uso del patrón Modelo Vista Controlador desarrollado con PHP y Javascript

## 1.-Instalar el programa XAMPP que incluye PHP 8.0 en adelante.

```sh
Install XAMPP https://www.apachefriends.org/
``` 

## 2.-Descargar 
Descargar el proyecto .zip ingresado [aquí](https://github.com/izipay-pe/Redirect-Payment-Form-PHP-MVC/archive/refs/heads/main.zip) ó clonarlo con git

```sh
git clone https://github.com/izipay-pe/Redirect-Payment-Form-PHP-MVC.git
``` 

## 3.-Mover el proyecto y descomprimirlo en la carpeta htdocs 
Descomprir el proyecto en la carpeta htdocs en la ruta de instalación de Xampp: `C:\xampp\htdocs`

![proyecto en xampp](views/images/captura1.png)

## 4-Abrir la aplicación XAMPP Control Panel 
 Abrir la aplicación instalada de Xampp y ejecutar el botón **Start** del modulo de **Apache**, quedando de la siguiente manera:

![Xampp control panel](views/images/captura2.png)

## 5.-Abrir el navegador web
Abrir la siguiente url en su navegador web (Chrome, Mozilla, Safari, etc) con el puerto 80 que abrió xampp : **http://localhost:80/Redirect-Payment-Form-PHP/** y realizar una compra de prueba.

![Pasarela de pago](views/images/captura3.png)

## 6.-Error: **PaymentFormError = 02 vads_side_id**  
 Este error saldrá porque no se tiene configurado las credenciales de integración en el archivo **./example.configKey.php** .  
 Estas mismas credenciales se encuentran en su [Back Office Vendedor de Izipay](https://secure.micuentaweb.pe/vads-merchant/) en la siguiente ruta: **Configuracion - Tienda - Claves**  
 Más información [aquí](https://secure.micuentaweb.pe/doc/es-PE/form-payment/quick-start-guide/identificarse-durante-los-intercambios.html).
 
![error en pasarela](views/images/captura%20error.png)

## 7.-Configurar el identificador de su tienda y la clave:
Obtener las credenciales de su Back Office Vendedor y copiarlas en las variales correspondientes en el archivo: `models/example.configKey.php ` 

```sh
// Identificador de su tienda
PaymentModel::setDefaultShopId("12345678");

// Clave de TEST y Producción de su Back Office Vendedor.
PaymentModel::setDefaultTestKey("2222222222222222");
PaymentModel::setDefaultProdKey("3333333333333333");

// URL de la plataforma de pago
PaymentModel::setDefaultUrlPayment("https://secure.micuentaweb.pe/vads-payment/");

// Modo de Configuración
PaymentModel::setDefaultMode("TEST");

``` 
## 8.-Configurar la respuesta del pago por IPN (Instant Payment Notification)
Configurar la URL de notificación al final del pago para que su servidor web esté al tanto de la información del estado de pago de la transacción. Vea la documentación para más información. Aquí [IPN](https://secure.micuentaweb.pe/doc/es-PE/form-payment/quick-start-guide/implementar-la-ipn.html)

![URL de notificacion](views/images/capturaIPN.png)

## 8.- Soporteecommerce@izipay.pe
Para más información comunicarse al correo del equipo de soporte de Izipay.  
**Asunto**: Mensaje + RUC + codigo de comercio / Razon Social.