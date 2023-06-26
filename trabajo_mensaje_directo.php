<div id="detallesMensajeDirecto">
    <div class="field">
        <label class="label">
            <?php echo traducir("correo_electronico") ?>
        </label>
        <div class="control">
            <input name="correoMensajeDirecto" class="input" type="email" placeholder="<?php echo traducir("placeholder_correo_electronico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("confirmar_correo_electronico") ?>
        </label>
        <div class="control">
            <input name="confirmarCorreoMensajeDirecto" class="input" type="email" placeholder="<?php echo traducir("placeholder_confirmar_correo_electronico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("mensaje") ?></label>
        <div class="control">
            <textarea name="mensajeDirecto" class="textarea" placeholder="<?php echo traducir("mensaje") ?>"></textarea>
        </div>
    </div>
</div>