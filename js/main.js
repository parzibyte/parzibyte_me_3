document.addEventListener("DOMContentLoaded", () => {
    const $selectTipoTrabajo = document.querySelector("#selectTipoTrabajo");
    const $detallesConsultoria = document.querySelector("#detallesConsultoria"),
        $detallesTarea = document.querySelector("#detallesTarea"),
        $detallesModificacion = document.querySelector("#detallesModificacion"),
        $detallesCreacion = document.querySelector("#detallesCreacion"),
        $detallesCompra = document.querySelector("#detallesCompra"),
        $pieFormulario = document.querySelector("#pieFormulario");

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
            return alert("Escribe tu correo");
        }
        if (!$confirmarCorreo.value) {
            return alert("Vuelve a escribir tu correo");
        }
        if ($correo.value !== $confirmarCorreo.value) {
            return alert("Los correos no coinciden");
        }
        if (!$tecnologia.value) {
            return alert("Elige una tecnología");
        }
        if (!$mensaje.value) {
            return alert("Escribe tu mensaje");
        }
        if (!$terminos.checked) {
            return alert("Debes aceptar los términos y condiciones");
        }
        const captcha = grecaptcha.getResponse();
        if (!captcha) {
            return alert("Por favor, comprueba que no eres un robot");
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
            return alert("Escribe tu correo");
        }
        if (!$confirmarCorreo.value) {
            return alert("Vuelve a escribir tu correo");
        }
        if ($correo.value !== $confirmarCorreo.value) {
            return alert("Los correos no coinciden");
        }
        const enlaceModificacion = $enlaceModificacion.value;
        if (!enlaceModificacion) {
            return alert("Escribe el link del post o vídeo de YouTube")
        }
        const regexBlog = /^https:\/\/parzibyte\.me\/blog\/\d{4}\/\d{2}\/\d{2}\/.+/gm;
        const regexYoutuBe = /^https:\/\/youtu\.be\/.+/gm;
        const regexYouTube = /^https:\/\/(www\.)?youtube\.com\/watch\?v=.+/gm;
        if (
            !regexBlog.test(enlaceModificacion) &&
            !regexYoutuBe.test(enlaceModificacion) &&
            !regexYouTube.test(enlaceModificacion)
        ) {
            return alert("Parece que el enlace proporcionado no es de mi blog ni de YouTube")
        }
        if (!$mensaje.value) {
            return alert("Escribe tu mensaje");
        }
        if (!$terminos.checked) {
            return alert("Debes aceptar los términos y condiciones");
        }
        const captcha = grecaptcha.getResponse();
        if (!captcha) {
            return alert("Por favor, comprueba que no eres un robot");
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
            return alert("Escribe tu correo");
        }
        if (!$confirmarCorreo.value) {
            return alert("Vuelve a escribir tu correo");
        }
        if ($correo.value !== $confirmarCorreo.value) {
            return alert("Los correos no coinciden");
        }
        if (!$tecnologia.value) {
            return alert("Elige una tecnología");
        }
        if (!$mensaje.value) {
            return alert("Escribe tu mensaje");
        }
        if (!$terminos.checked) {
            return alert("Debes aceptar los términos y condiciones");
        }
        const captcha = grecaptcha.getResponse();
        if (!captcha) {
            return alert("Por favor, comprueba que no eres un robot");
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
        console.log({ payload });
        const response = await fetch("./correo.php", {
            method: "POST",
            body: JSON.stringify(payload),
        });
        const respuesta = await response.json();
        if (respuesta === true) {
            alert("Mensaje enviado");
        } else {
            alert("Error: " + respuesta);
        }
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

        //autoWidth:true,
        autoplay: true,
        rewind: true,
        gutter: 10,
        controls: false,
        nav: false,
        autoplayButtonOutput: false,

    });
});