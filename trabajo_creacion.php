<div id="detallesCreacion">
    <div class="notification is-danger">
        Agradecería si tienes un PDF explicando lo que necesitas como se indica en
        <a target="_blank" href="https://parzibyte.me/blog/2022/04/17/solicitar-software-personalizado-cambios-uno-existente/">https://parzibyte.me/blog/2022/04/17/solicitar-software-personalizado-cambios-uno-existente/</a>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("Correo electrónico") ?>
        </label>
        <div class="control">
            <input name="correoCreacion" class="input" type="email" placeholder="<?php echo traducir("Escribe tu correo electrónico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("Confirmar correo electrónico") ?>
        </label>
        <div class="control">
            <input name="confirmarCorreoCreacion" class="input" type="email" placeholder="<?php echo traducir("Vuelve a escribir tu correo electrónico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("Tecnología y/o lenguaje de programación:") ?></label>
        <div class="control">
            <div class="select">
                <select name="tecnologiaCreacion">
                    <option value="any">Lo que Parzibyte prefiera</option>
                    <option value="angular">Angular con TypeScript</option>
                    <option value="arduino">Arduino</option>
                    <option value="c">C / ANSI C</option>
                    <option value="cpp">C++ o CPP</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript (lado del cliente) con HTML y/o CSS</option>
                    <option value="javascript_backend">JavaScript (lado del servidor)</option>
                    <option value="go">Golang / Go</option>
                    <option value="mysql">MySQL</option>
                    <option value="php">PHP</option>
                    <option value="postgresql">PostgreSQL</option>
                    <option value="sqlite3">SQLite3</option>
                    <option value="python">Python</option>
                    <option value="vue">Vue con JavaScript</option>
                </select>
            </div>
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("Mensaje") ?></label>
        <div class="control">
            <textarea name="mensajeCreacion" class="textarea" placeholder="<?php echo traducir("Mensaje") ?>"></textarea>
        </div>
    </div>
    <div class="notification is-success">
        <strong>Nota:</strong> si tienes un PDF puedes subirlo a Google Drive, WeTransfer, etcétera y copiar el enlace/link en el campo del mensaje junto con las demás especificaciones
    </div>
    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input name="terminosCreacion" type="checkbox">
                Acepto los <a target="blank" href="https://parzibyte.me/blog/2022/11/05/consideraciones-modificacion-creacion-software/">términos y condiciones</a>
            </label>
        </div>
    </div>

</div>