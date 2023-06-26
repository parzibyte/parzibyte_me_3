<section class="hero" id="contacto">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title">
                    <?php echo traducir("contacto"); ?>
                </p>
                <p class="subtitle">
                    <?php echo traducir("encantado_ayudarte"); ?>
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="column is-one-third">
                <img src="./images/contact.svg" alt="<?php echo traducir("contacto"); ?>">
            </div>
            <div class="column">
                <form action="correo.php" method="post" id="formContacto">
                    <div class="field">
                        <label class="label"><?php echo traducir("como_puedo_ayudarte") ?></label>
                        <div class="control">
                            <div class="select">
                                <select name="tipoTrabajo" id="selectTipoTrabajo">
                                    <option value="mensajeDirecto"><?php echo traducir("mensaje_directo") ?></option>
                                    <option value="consultoria"><?php echo traducir("consultoria") ?></option>
                                    <option value="tarea"><?php echo traducir("tarea") ?></option>
                                    <option value="modificacion"><?php echo traducir("modificacion") ?></option>
                                    <option value="creacion"><?php echo traducir("creacion") ?></option>
                                    <option value="compra"><?php echo traducir("compra") ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php include_once "trabajo_mensaje_directo.php"; ?>
                    <?php include_once "trabajo_consultoria.php"; ?>
                    <?php include_once "trabajo_tarea.php"; ?>
                    <?php include_once "trabajo_modificacion.php"; ?>
                    <?php include_once "trabajo_creacion.php"; ?>
                    <?php include_once "trabajo_compra.php"; ?>
                    <div id="pieFormulario">
                        <div class="field">
                            <div class="g-recaptcha" data-sitekey="6LcQh0UUAAAAAGxeWVi1VubbM2z1GmEZeWJXH0x0">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button id="botonFormulario" class="button is-link"><?php echo traducir("enviar") ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>