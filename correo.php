<?php
include_once "traductor.php";
define("CLAVE_CAPTCHA", "");

/**
 * Verifica el token del captcha y regresa true o false
 * true en caso de que el usuario haya pasado la prueba
 * false en caso contrario
 *
 * Más información: https://parzibyte.me/blog/2019/08/21/peticion-http-php-json-formulario/
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */
function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta,
        "response" => $token,
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }
    # En caso de que no haya regresado false, decodificamos con JSON
    # https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/
    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success
    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
}

$payload = json_decode(file_get_contents("php://input"));
if (!$payload) {
    echo json_encode(traducir("no_hay_payload"));
    exit;
}

if (!isset($payload->captcha)) {
    echo json_encode(traducir("validar_captcha"));
    exit;
}
$captchaOk = verificarToken($payload->captcha, CLAVE_CAPTCHA);
if (!$captchaOk) {
    echo json_encode(traducir("captcha_invalido"));
    exit;
}

if (!isset($payload->trabajo)) {
    echo json_encode(traducir("validar_tipo_trabajo"));
    exit;
}
if (!isset($payload->correo)) {
    echo json_encode(traducir("validar_correo"));
    exit;
}
if (!filter_var($payload->correo, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(traducir("validar_correo"));
    exit;
}
if ($payload->trabajo !== "modificacion") {
    if (!isset($payload->tecnologia)) {
        echo json_encode(traducir("validar_elegir_tecnologia"));
        exit;
    }
}
if (!isset($payload->mensaje)) {
    echo json_encode("No hay mensaje");
    exit;
}
if (mb_strlen($payload->mensaje) > 128) {
    echo json_encode("Request too long");
    exit;
}
if ($payload->trabajo === "modificacion") {
    if (!isset($payload->enlaceModificacion)) {
        echo json_encode(traducir("validar_link_modificacion"));
        exit;
    }
    $expresionRegularBlog = '/^https:\/\/parzibyte\.me\/blog\/\d{4}\/\d{2}\/\d{2}\/.+/m';
    $expresionRegularYoutuBe = '/^https:\/\/youtu\.be\/.+/m';
    $expresionRegularYouTube = '/^https:\/\/(www\.)?youtube\.com\/watch\?v=.+/m';
    $ningunaCoincide = preg_match($expresionRegularBlog, $payload->enlaceModificacion) !== 1 &&
        preg_match($expresionRegularYoutuBe, $payload->enlaceModificacion) !== 1 &&
        preg_match($expresionRegularYouTube, $payload->enlaceModificacion) !== 1;
    if ($ningunaCoincide) {
        echo json_encode(traducir("validar_link_modificacion_mio"));
        exit;
    }
}
$ip = empty($_SERVER["REMOTE_ADDR"]) ? traducir("desconocida") : $_SERVER["REMOTE_ADDR"];
$asunto = "";
$cuerpo = "";
$correo = $payload->correo;
$destinatario = "parzibyte@gmail.com";
$encabezados = "From: $correo\r\n";
$encabezados .= "Sender: contacto@parzibyte.me\r\n";
$encabezados .= "Reply-To: $correo\r\n";
switch ($payload->trabajo) {
    case "mensajeDirecto":
        $asunto = "Consulta";
        $cuerpo = sprintf(
            "Hola Parzibyte.\nMi correo es %s\n%s\nEste mensaje fue enviado desde la ip %s",
            $payload->correo,
            $payload->mensaje,
            $ip
        );
        break;
    case "tarea":
        $asunto = traducir("tarea_en") . $payload->tecnologia;
        $cuerpo = sprintf(
            "Hola Parzibyte. Necesito una tarea en %s.\nMi correo es %s, a continuación te envío los detalles:\n%s\nAl enviar este mensaje estoy aceptando las condiciones publicadas en: https://parzibyte.me/blog/2021/03/17/consideraciones-tareas-programacion/.\nEste mensaje fue enviado desde la ip %s",
            $payload->tecnologia,
            $payload->correo,
            $payload->mensaje,
            $ip
        );
        break;
    case "modificacion":
        $asunto = traducir("modificacion_software");
        $cuerpo = sprintf(
            "Hola Parzibyte. Necesito que realices modificaciones al programa/software publicado en %s.\nMi correo es %s, a continuación te envío los detalles de lo que necesito:\n%s\nAl enviar este mensaje estoy aceptando las condiciones publicadas en: https://parzibyte.me/blog/2022/11/05/consideraciones-modificacion-creacion-software/.\nEste mensaje fue enviado desde la ip %s",
            $payload->enlaceModificacion,
            $payload->correo,
            $payload->mensaje,
            $ip
        );
        break;
    case "creacion":
        $asunto = traducir("creacion_de_software_en") . $payload->tecnologia;
        $cuerpo = sprintf(
            "Hola Parzibyte. Necesito crear un programa/software con %s.\nMi correo es %s, a continuación te envío los detalles:\n%s\nAl enviar este mensaje estoy aceptando las condiciones publicadas en: https://parzibyte.me/blog/2022/11/05/consideraciones-modificacion-creacion-software/.\nEste mensaje fue enviado desde la ip %s",
            $payload->tecnologia,
            $payload->correo,
            $payload->mensaje,
            $ip
        );
        break;
}
if (empty($asunto) || empty($cuerpo)) {
    echo json_encode(traducir("asunto_o_cuerpo_vacios"));
    exit;
}
$resultado = @mail($destinatario, mb_strimwidth($asunto, 0, 40), $cuerpo, $encabezados);
if ($resultado) {
    echo json_encode(true);
} else {
    echo json_encode(traducir("error_enviando_correo"));
}
