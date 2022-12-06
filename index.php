<?php
function traducir($mensaje)
{
    return $mensaje;
}
?>
<?php
$fotosPortafolio = [
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2020/03/Inicio-Punto-de-venta-con-Laravel-usuarios-y-clientes.png",
        "enlace" => "https://parzibyte.me/blog/2020/03/06/sistema-ventas-laravel-bootstrap-mysql-open-source/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2020/04/Escritorio-de-sistema-de-ventas-Android-Mostrar-opciones.jpg",
        "enlace" => "https://parzibyte.me/blog/2020/04/09/punto-venta-android-open-source/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/09/Administraci%C3%B3n-de-turnos-dentro-del-software-Turnero.png",
        "enlace" => "https://parzibyte.me/blog/2019/09/05/app-entregas-android-sincronizacion-web-gps/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/09/Mostrar-productos-en-Spring-Boot.png",
        "enlace" => "https://parzibyte.me/blog/2019/09/04/sistema-ventas-spring-mvc-mysql-bootstrap/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/08/Juego-de-memorama-en-JavaScript.png",
        "enlace" => "https://parzibyte.me/blog/2019/08/06/juego-memorama-javascript-tutorial/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/08/Explicaci%C3%B3n-de-plugin-para-impresora-t%C3%A9rmica.png",
        "enlace" => "https://parzibyte.me/blog/2019/08/01/plugin-impresora-termica-navegador-javascript/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2018/03/Sistema-de-ventas-en-PHP.png",
        "enlace" => "https://parzibyte.me/blog/2018/03/13/pequeno-sistema-ventas-php/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/07/Demostraci%C3%B3n-app-de-notas-con-PHP-y-MySQL.gif",
        "enlace" => "https://parzibyte.me/blog/2019/07/29/app-notas-php-ejemplo-codigo/",
    ],
    [
        "imagen" => "https://i1.wp.com/parzibyte.me/blog/wp-content/uploads/2019/03/Control-de-ventas-de-productos-con-Sublime-POS-3.png?resize=768%2C279&ssl=1",
        "enlace" => "http://bit.ly/sublime-pos",
    ],
    [
        "imagen" => "https://i1.wp.com/parzibyte.me/blog/wp-content/uploads/2019/04/Escritorio-1-Mostrar-balance-y-gastos.png?w=500&ssl=1",
        "enlace" => "https://parzibyte.me/blog/2019/04/13/aplicacion-android-gratuita-finanzas-personales-gastos-ingresos-deudas-prestamos/",
    ],
    [
        "imagen" => "https://i2.wp.com/parzibyte.me/blog/wp-content/uploads/2019/01/Sistema-web-para-cotizaciones-y-presupuestos.png?resize=768%2C576&ssl=1",
        "enlace" => "https://parzibyte.me/blog/2019/07/01/sistema-web-pagos-cooperaciones-open-source-php/",
    ],
    [
        "imagen" => "https://camo.githubusercontent.com/3cef5a4b69838070fe9775b7229de650fc9f6e5b/68747470733a2f2f7061727a69627974652e6d652f626c6f672f77702d636f6e74656e742f75706c6f6164732f323031392f30372f5061676f732d64652d706572736f6e61732e706e67",
        "enlace" => "https://parzibyte.me/blog/2019/01/10/sistema-web-para-cotizaciones-y-presupuestos-gratuito-open-source/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/04/Generador-de-multiplicaciones-online-Ejercicios-de-matem%C3%A1ticas.png",
        "enlace" => "https://parzibyte.me/blog/2019/05/04/generador-de-multiplicaciones-online-para-imprimir-y-resolver/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/12/Enlaces-sin-acortar-para-usuario-premium.png",
        "enlace" => "https://parzibyte.me/blog/2019/12/16/sistema-gestor-enlaces-acortadores/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/12/Control-escolar-Bienvenida-al-sistema.png",
        "enlace" => "https://parzibyte.me/blog/2019/12/08/control-escolar-software-web-gestion-escuelas/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/05/OCR-con-JavaScript-y-tesseract-js.png",
        "enlace" => "https://parzibyte.me/apps/conversor-imagen-a-texto/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2020/02/Parzibyte-jugando-snake-en-Arduino-usando-un-joystick.jpg",
        "enlace" => "https://parzibyte.me/blog/2020/01/23/juego-serpiente-snake-arduino/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2018/11/Snake-juego-en-proceso.png",
        "enlace" => "https://parzibyte.me/blog/2018/11/05/juego-serpiente-javascript-version-2/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2018/12/C%C3%A1lculo-del-factorial-de-un-n%C3%BAmero-en-JavaScript.-Aplicaci%C3%B3n-web-online.png",
        "enlace" => "https://parzibyte.me/apps/factorial/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2020/02/ESP8266-con-DHT22-enviando-datos-a-Adafruit.jpg",
        "enlace" => "https://parzibyte.me/blog/2020/02/22/enviar-datos-dht22-adafruit-esp8266/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2020/02/Probando-display-7-segmentos-con-GPIO-y-Raspberry-Pi.jpg",
        "enlace" => "https://parzibyte.me/blog/2020/02/09/display-7-segmentos-raspberry-pi-gpio/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2020/01/Descargador-de-canciones.png",
        "enlace" => "https://parzibyte.me/blog/2020/01/19/descargador-canciones-automatico/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2019/12/Demostraci%C3%B3n-openlayers-con-marcadores-y-coordenadas.gif",
        "enlace" => "https://parzibyte.me/blog/2019/12/27/tutorial-openlayers-marcadores-coordenadas-eventos-datos-dinamicos/",
    ],
    [
        "imagen" => "https://parzibyte.me/blog/wp-content/uploads/2018/03/Buscador-wikipedia-en-espa%C3%B1ol.png",
        "enlace" => "https://parzibyte.me/blog/2018/03/26/visor-buscador-articulos-wikipedia-vuejs/",
    ],
];
shuffle($fotosPortafolio);
?>
<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./css/tiny-slider.css">
    <title><?php echo traducir("Parzibyte - Programador freelance"); ?></title>
    <script src="./js/tiny-slider.js" type="text/javascript"></script>
</head>

<body>
    <?php include_once "nav.php"; ?>
    <?php include_once "inicio.php"; ?>
    <?php include_once "servicios.php"; ?>
    <?php include_once "portafolio.php"; ?>
    <?php include_once "contacto.php"; ?>
    <?php include_once "footer.php"; ?>
    
    <script src="./js/main.js"></script>
</body>

</html>