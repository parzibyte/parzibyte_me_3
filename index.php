<?php
include_once "traductor.php";
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
<html lang="<?php echo obtenerIdioma(); ?>" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/tiny-slider.css">
    <title><?php echo traducir("titulo_pagina"); ?></title>
    <script src="./js/tiny-slider.js" type="text/javascript"></script>
    <script src="./js/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <?php include_once "nav.php"; ?>
    <?php include_once "inicio.php"; ?>
    <?php include_once "servicios.php"; ?>
    <?php include_once "portafolio.php"; ?>
    <?php include_once "contacto.php"; ?>
    <?php include_once "footer.php"; ?>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const $selectTipoTrabajo = document.querySelector("#selectTipoTrabajo");
            const $detallesConsultoria = document.querySelector("#detallesConsultoria"),
                $detallesTarea = document.querySelector("#detallesTarea"),
                $detallesModificacion = document.querySelector("#detallesModificacion"),
                $detallesCreacion = document.querySelector("#detallesCreacion"),
                $detallesCompra = document.querySelector("#detallesCompra"),
                $pieFormulario = document.querySelector("#pieFormulario"),
                $botonFormulario = document.querySelector("#botonFormulario"),
                $minutos = document.querySelector("#minutos"),
                $contenedorCosto = document.querySelector("#contenedorCosto"),
                $contenedorMinutos = document.querySelector("#contenedorMinutos");


            const reflejarCosto = () => {
                const minutos = parseInt($minutos.value);
                let costoPorMinutoEnDolares = 10;
                if (minutos <= 10) {
                    costoPorMinutoEnDolares = 0.2;
                } else if (minutos > 10 && minutos <= 20) {
                    costoPorMinutoEnDolares = 0.4;
                } else if (minutos > 20 && minutos <= 30) {
                    costoPorMinutoEnDolares = 0.5;
                } else if (minutos > 30 && minutos <= 60) {
                    costoPorMinutoEnDolares = 1;
                } else if (minutos > 60) {
                    costoPorMinutoEnDolares = 1.5;
                }
                const costo = minutos * costoPorMinutoEnDolares;
                $contenedorMinutos.textContent = minutos;
                $contenedorCosto.textContent = costo;
            };
            reflejarCosto();

            $minutos.addEventListener("input", reflejarCosto);

            const $formContacto = document.querySelector("#formContacto");
            const ocultarTodo = () => {
                [$detallesConsultoria, $detallesTarea, $detallesModificacion, $detallesCreacion, $detallesCompra, $pieFormulario].forEach($elemento => {
                    $elemento.style.display = "none";
                });
            };
            const onOpcionCambiada = () => {
                ocultarTodo();
                const opcion = $selectTipoTrabajo.value;
                switch (opcion) {
                    case "consultoria":
                        consultoriaSeleccionada();
                        break;
                    case "tarea":
                        tareaSeleccionada();
                        break;
                    case "modificacion":
                        modificacionSeleccionada();
                        break;
                    case "creacion":
                        creacionSeleccionada();
                        break;
                    case "compra":
                        compraSeleccionada();
                        break;
                }
            };
            const consultoriaSeleccionada = () => {
                $detallesConsultoria.style.display = "block";
            };

            const tareaSeleccionada = () => {
                $detallesTarea.style.display = "block";
                $pieFormulario.style.display = "block";
            };
            const modificacionSeleccionada = () => {
                $detallesModificacion.style.display = "block";
                $pieFormulario.style.display = "block";
            };
            const creacionSeleccionada = () => {
                $detallesCreacion.style.display = "block";
                $pieFormulario.style.display = "block";
            };
            const compraSeleccionada = () => {
                $detallesCompra.style.display = "block";
            };
            $selectTipoTrabajo.addEventListener("change", () => {
                onOpcionCambiada();
            });
            const enviarTarea = () => {
                const $correo = document.querySelector(`[name="correoTarea"]`);
                const $confirmarCorreo = document.querySelector(`[name="confirmarCorreoTarea"]`);
                const $tecnologia = document.querySelector(`[name="tecnologiaTarea"]`);
                const $mensaje = document.querySelector(`[name="mensajeTarea"]`);
                const $terminos = document.querySelector(`[name="terminosTarea"]`);
                if (!$correo.value) {
                    return alert("<?php echo traducir("validar_correo") ?>");
                }
                if (!$confirmarCorreo.value) {
                    return alert("<?php echo traducir("validar_confirmacion_correo") ?>");
                }
                if ($correo.value !== $confirmarCorreo.value) {
                    return alert("<?php echo traducir("correos_no_coinciden") ?>");
                }
                if (!$tecnologia.value) {
                    return alert("<?php echo traducir("validar_elegir_tecnologia") ?>");
                }
                if (!$mensaje.value) {
                    return alert("<?php echo traducir("validar_mensaje") ?>");
                }
                if (!$terminos.checked) {
                    return alert("<?php echo traducir("validar_terminos") ?>");
                }
                const captcha = grecaptcha.getResponse();
                if (!captcha) {
                    return alert("<?php echo traducir("validar_captcha") ?>");
                }
                const payload = {
                    trabajo: $selectTipoTrabajo.value,
                    correo: $correo.value,
                    tecnologia: $tecnologia.selectedOptions[0].innerText,
                    mensaje: $mensaje.value,
                    captcha,
                };
                enviarPayload(payload);
            };
            const enviarModificacion = () => {
                const $correo = document.querySelector(`[name="correoModificacion"]`);
                const $confirmarCorreo = document.querySelector(`[name="confirmarCorreoModificacion"]`);
                const $enlaceModificacion = document.querySelector(`[name="enlaceModificacion"]`);
                const $mensaje = document.querySelector(`[name="mensajeModificacion"]`);
                const $terminos = document.querySelector(`[name="terminosModificacion"]`);
                if (!$correo.value) {
                    return alert("<?php echo traducir("validar_correo") ?>");
                }
                if (!$confirmarCorreo.value) {
                    return alert("<?php echo traducir("validar_confirmacion_correo") ?>");
                }
                if ($correo.value !== $confirmarCorreo.value) {
                    return alert("<?php echo traducir("correos_no_coinciden") ?>");
                }
                const enlaceModificacion = $enlaceModificacion.value;
                if (!enlaceModificacion) {
                    return alert("<?php echo traducir("validar_link_modificacion") ?>");
                }
                const regexBlog = /^https:\/\/parzibyte\.me\/blog\/\d{4}\/\d{2}\/\d{2}\/.+/gm;
                const regexYoutuBe = /^https:\/\/youtu\.be\/.+/gm;
                const regexYouTube = /^https:\/\/(www\.)?youtube\.com\/watch\?v=.+/gm;
                if (
                    !regexBlog.test(enlaceModificacion) &&
                    !regexYoutuBe.test(enlaceModificacion) &&
                    !regexYouTube.test(enlaceModificacion)
                ) {
                    return alert("<?php echo traducir("validar_link_modificacion_mio") ?>");
                }
                if (!$mensaje.value) {
                    return alert("<?php echo traducir("validar_mensaje") ?>");
                }
                if (!$terminos.checked) {
                    return alert("<?php echo traducir("validar_terminos") ?>");
                }
                const captcha = grecaptcha.getResponse();
                if (!captcha) {
                    return alert("<?php echo traducir("validar_captcha") ?>");
                }
                const payload = {
                    trabajo: $selectTipoTrabajo.value,
                    correo: $correo.value,
                    enlaceModificacion,
                    mensaje: $mensaje.value,
                    captcha,
                };
                enviarPayload(payload);
            };

            const enviarCreacion = () => {
                const $correo = document.querySelector(`[name="correoCreacion"]`);
                const $confirmarCorreo = document.querySelector(`[name="confirmarCorreoCreacion"]`);
                const $tecnologia = document.querySelector(`[name="tecnologiaCreacion"]`);
                const $mensaje = document.querySelector(`[name="mensajeCreacion"]`);
                const $terminos = document.querySelector(`[name="terminosCreacion"]`);


                if (!$correo.value) {
                    return alert("<?php echo traducir("validar_correo") ?>");
                }
                if (!$confirmarCorreo.value) {
                    return alert("<?php echo traducir("validar_confirmacion_correo") ?>");
                }
                if ($correo.value !== $confirmarCorreo.value) {
                    return alert("<?php echo traducir("correos_no_coinciden") ?>");
                }
                if (!$tecnologia.value) {
                    return alert("<?php echo traducir("validar_elegir_tecnologia") ?>");
                }
                if (!$mensaje.value) {
                    return alert("<?php echo traducir("validar_mensaje") ?>");
                }
                if (!$terminos.checked) {
                    return alert("<?php echo traducir("validar_terminos") ?>");
                }
                const captcha = grecaptcha.getResponse();
                if (!captcha) {
                    return alert("<?php echo traducir("validar_captcha") ?>");
                }
                const payload = {
                    trabajo: $selectTipoTrabajo.value,
                    correo: $correo.value,
                    tecnologia: $tecnologia.selectedOptions[0].innerText,
                    mensaje: $mensaje.value,
                    captcha,
                };
                enviarPayload(payload);
            };
            const enviarPayload = async (payload) => {
                $botonFormulario.classList.add("is-loading");
                const response = await fetch("./correo.php", {
                    method: "POST",
                    body: JSON.stringify(payload),
                });
                const respuesta = await response.json();
                $botonFormulario.classList.remove("is-loading");
                if (respuesta === true) {
                    Swal.fire('<?php echo traducir("mensaje_enviado") ?>', '<?php echo traducir("he_recibido_mensaje") ?>', 'success')
                    $formContacto.reset();
                    onOpcionCambiada();
                } else {
                    Swal.fire('Error', "<?php echo traducir("ocurrio_error") ?>" + respuesta, 'error')
                }
                grecaptcha.reset();
            };
            $formContacto.addEventListener("submit", evento => {
                evento.preventDefault();
                const opcion = $selectTipoTrabajo.value;
                switch (opcion) {
                    case "tarea":
                        enviarTarea();
                        break;
                    case "modificacion":
                        enviarModificacion();
                        break;
                    case "creacion":
                        enviarCreacion();
                        break;
                }
            })
            onOpcionCambiada();
            tns({
                container: '#slider',
                slideBy: 'page',
                mouseDrag: true,
                items: 3,
                lazyload: true,
                autoplay: true,
                rewind: true,
                gutter: 10,
                controls: false,
                nav: false,
                autoplayButtonOutput: false,
            });
        });
    </script>
</body>

</html>