<div id="detallesModificacion">
    <div class="notification is-danger">
        Agradecería si tienes un PDF explicando lo que necesitas como se indica en
        <a target="_blank" href="https://parzibyte.me/blog/2022/04/17/solicitar-software-personalizado-cambios-uno-existente/">https://parzibyte.me/blog/2022/04/17/solicitar-software-personalizado-cambios-uno-existente/</a>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("Correo electrónico") ?>
        </label>
        <div class="control">
            <input name="correoModificacion" class="input" type="email" placeholder="<?php echo traducir("Escribe tu correo electrónico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("Confirmar correo electrónico") ?>
        </label>
        <div class="control">
            <input name="confirmarCorreoModificacion" class="input" type="email" placeholder="<?php echo traducir("Vuelve a escribir tu correo electrónico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("Enlace del post del blog o vídeo de YouTube del sistema: ") ?>
        </label>
        <div class="control">
            <input name="enlaceModificacion" class="input" type="text" placeholder="<?php echo traducir("Link del lugar donde viste el sistema"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("Describe los cambios que necesitas:") ?></label>
        <div class="control">
            <textarea name="mensajeModificacion" class="textarea" placeholder="<?php echo traducir("Mensaje") ?>"></textarea>
        </div>
    </div>
    <div class="notification is-success">
        <strong>Nota:</strong> si tienes un PDF puedes subirlo a Google Drive, WeTransfer, etcétera y copiar el enlace/link en el campo del mensaje junto con las demás especificaciones
    </div>
    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input name="terminosModificacion" type="checkbox">
                Acepto los <a target="blank" href="https://parzibyte.me/blog/2022/11/05/consideraciones-modificacion-creacion-software/">términos y condiciones</a>
            </label>
        </div>
    </div>
</div>