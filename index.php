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
    <nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://parzibyte.me">
                <img src="./images/logo.svg" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="#"><?php echo traducir("Inicio"); ?></a>
                <a class="navbar-item" href="#servicios"><?php echo traducir("Servicios"); ?></a>
                <a class="navbar-item" href="#portafolio"><?php echo traducir("Portafolio"); ?></a>
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>
                                <?php echo traducir("Contacto"); ?>
                            </strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="hero is-link">
        <div class="hero-body">
            <div class="columns">
                <div class="column is-two-thirds">
                    <p class="title">
                        <?php echo traducir("Estoy aquí para ayudarte, brindando mis servicios de consultoría informática"); ?>
                    </p>
                    <p class="subtitle">
                        <?php echo traducir("Hola, soy Parzibyte. Puedo ayudar con tu tarea de programación, desarrollar cualquier software web o móvil, configurar servidores y todo lo relacionado con programación, TI e informática"); ?>
                    </p>
                    <div class="buttons">
                        <button class="button is-info is-rounded"><?php echo traducir("Servicios"); ?></button>
                        <button class="button is-success is-rounded"><?php echo traducir("Contacto"); ?></button>
                        <button class="button is-warning is-rounded"><?php echo traducir("Blog"); ?></button>
                    </div>
                </div>
                <div class="column">
                    <img src="./images/freelance-developer.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="hero" id="servicios">
        <div class="hero-body">
            <div class="columns">
                <div class="column">
                    <p class="title">
                        <?php echo traducir("Servicios"); ?>
                    </p>
                    <p class="subtitle">
                        <?php echo traducir("Mira cómo puedo ayudarte"); ?>
                    </p>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <img src="./images/programming-help.svg" alt="">
                    <div class="title">
                        <?php echo traducir("Consultoría y ayuda en general"); ?>
                    </div>
                    <p>
                        <?php echo traducir("Resolver dudas en tu tarea, solucionar problemas de código (en mi proyecto o el tuyo), preguntas sobre mis programas, asesorías o ayuda en general con cualquier cosa relacionada a la programación"); ?>
                    </p>
                </div>
                <div class="column">
                    <img src="./images/homework.svg" alt="">
                    <div class="title">
                        <?php echo traducir("Ayuda con tu tarea"); ?>
                    </div>
                    <p>
                        <?php echo traducir("Solución a ejercicios de programación, desarrollo de proyectos y sistemas, entre otros"); ?>
                    </p>
                </div>
                <div class="column">
                    <img src="./images/software-editing.svg" alt="">
                    <div class="title">
                        <?php echo traducir("Modificación de uno de mis sistemas"); ?>
                    </div>
                    <p>
                        <?php echo traducir("Agregar o modificar características a mis programas ya existentes en mi blog"); ?>
                    </p>
                </div>

            </div>
            <div class="columns">
                <div class="column">
                    <img src="./images/software-developer.svg" alt="">
                    <div class="title">
                        <?php echo traducir("Creación de software"); ?>
                    </div>
                    <p>
                        <?php echo traducir("Crear o clonar software a la medida. Web, frontend, backend, consola, aplicación móvil, Arduino, Linux, etcétera"); ?>
                    </p>
                </div>
                <div class="column">
                    <img src="./images/server-admin.svg" alt="">
                    <div class="title">
                        <?php echo traducir("Hosting y servidores"); ?>
                    </div>
                    <p>
                        <?php echo traducir("Colocar tu marca en internet, crear página web, alojar tu sistema en mi servidor o configurar el tuyo (solo servidores Linux basados en Debian)"); ?>
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="hero" id="portafolio">
        <div class="hero-body">
            <div class="columns">
                <div class="column">
                    <p class="title">
                        <?php echo traducir("Portafolio"); ?>
                    </p>
                    <p class="subtitle">
                        <?php echo traducir("Permíteme mostrarte un poco de lo que he creado"); ?>
                    </p>
                </div>
            </div>
            <div class="columns" style="padding:10px; background-color:#fafafa;">
                <div id="slider">
                    <?php
                    foreach ($fotosPortafolio as $foto) {
                    ?>
                        <div>
                            <img src="<?php echo $foto["imagen"]; ?>" alt="">
                            <p class="is-size-4 has-text-centered"><a target="blank" href="<?php echo $foto["enlace"]; ?>">
                                    <?php echo traducir("Ver"); ?>
                                </a>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>
                        <?php echo traducir("Mira mis proyectos open source: ") ?>
                        <a href="https://github.com/parzibyte?tab=repositories&q=&type=public&language=">https://github.com/parzibyte?tab=repositories&q=&type=public&language=</a>
                    </p>
                    <p>
                        <?php echo traducir("O visita mi blog para ver mis últimas entradas:") ?>
                        <a href="https://parzibyte.me/blog">https://parzibyte.me/blog</a>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="section">

        <div class="container">

            <div class="columns">

                <div class="column">

                </div>
            </div>
            <div class="columns">
                <div class="column">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere illum ex possimus nemo! In aliquid esse cupiditate dicta. Possimus praesentium adipisci atque delectus veniam dolores minima reiciendis sunt nesciunt repellat?</div>
            </div>

            <div class="columns">
                <div class="column">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed cum explicabo sunt saepe sequi, tenetur ducimus voluptates non nisi sapiente quos expedita cumque odio earum deleniti magnam dicta esse necessitatibus!</div>
                <div class="column">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta debitis aliquam doloribus aperiam eos a officia architecto obcaecati, minus voluptas, quae totam corporis error consequuntur ratione accusamus. Iste, autem repellendus?</div>
            </div>
            <h1 class="title">
                Hello World
            </h1>
            <p class="subtitle">
                My first website with <strong>Bulma</strong>!
            </p>
        </div>
    </section>

    <script src="./js/main.js"></script>
</body>

</html>