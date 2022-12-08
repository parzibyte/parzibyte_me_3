<div id="detallesTarea">
    <div class="field">
        <label class="label">
            <?php echo traducir("Correo electrónico") ?>
        </label>
        <div class="control">
            <input name="correoTarea" class="input" type="email" placeholder="<?php echo traducir("Escribe tu correo electrónico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("Confirmar correo electrónico") ?>
        </label>
        <div class="control">
            <input name="confirmarCorreoTarea" class="input" type="email" placeholder="<?php echo traducir("Vuelve a escribir tu correo electrónico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("Tecnología y/o lenguaje de programación:") ?></label>
        <div class="control">
            <div class="select">
                <select name="tecnologiaTarea">
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
            <textarea name="mensajeTarea" class="textarea" placeholder="<?php echo traducir("Mensaje") ?>"></textarea>
        </div>
    </div>
    <div class="notification is-success">
        <strong>Nota:</strong> si tienes un PDF puedes subirlo a Google Drive, WeTransfer, etcétera y copiar el enlace/link en el campo del mensaje junto con las demás especificaciones
    </div>
    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input name="terminosTarea" type="checkbox">
                Acepto los <a target="blank" href="https://parzibyte.me/blog/2021/03/17/consideraciones-tareas-programacion/">términos y condiciones</a>
            </label>
        </div>
    </div>
</div>