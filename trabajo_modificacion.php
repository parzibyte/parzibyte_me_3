<div id="detallesModificacion">
    <div class="notification is-danger">
        <?php echo traducir("trabajo_creacion_pdf") ?>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("correo_electronico") ?>
        </label>
        <div class="control">
            <input name="correoModificacion" class="input" type="email" placeholder="<?php echo traducir("placeholder_correo_electronico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("confirmar_correo_electronico") ?>
        </label>
        <div class="control">
            <input name="confirmarCorreoModificacion" class="input" type="email" placeholder="<?php echo traducir("placeholder_confirmar_correo_electronico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("trabajo_modificacion_enlace_sistema") ?>
        </label>
        <div class="control">
            <input name="enlaceModificacion" class="input" type="text" placeholder="<?php echo traducir("placeholder_trabajo_modificacion_enlace_sistema"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("describe_cambios") ?></label>
        <div class="control">
            <textarea name="mensajeModificacion" class="textarea" placeholder="<?php echo traducir("mensaje") ?>"></textarea>
        </div>
    </div>
    <div class="notification is-success">
        <?php echo traducir("nota_subir_pdf") ?>
    </div>
    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input name="terminosModificacion" type="checkbox">
                <?php echo traducir("trabajo_modificacion_acepta_terminos") ?>
            </label>
        </div>
    </div>
</div>