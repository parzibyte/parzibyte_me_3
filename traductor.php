<?php

function cadenaEmpiezaCon($cadena, $busqueda)
{
    return mb_substr($cadena, 0, mb_strlen($busqueda)) === $busqueda;
}

function obtenerIdioma()
{
    $idiomaDetectado = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    /*
    Si es algo como es_MX, es_US, etcétera, lo mandamos directamente a "es"
    Si no, lo dejamos intacto y caerá por defecto en inglés
     */
    $idioma = cadenaEmpiezaCon($idiomaDetectado, "es") ? "es" : $idiomaDetectado;
    return $idioma;
}
function traducir($cadena)
{
    $idioma = obtenerIdioma();
    $contenido = null;
    if ($idioma === "es") {
        $contenido = file_get_contents("idioma_es.json");
    } else {
        $contenido = file_get_contents("idioma_en.json");
    }
    if (!$contenido) {
        return $cadena;
    }
    $diccionario = json_decode($contenido);
    if (!property_exists($diccionario, $cadena)) {
        return $cadena;
    }
    return $diccionario->{$cadena};
}
