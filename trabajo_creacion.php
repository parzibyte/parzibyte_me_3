<div id="detallesCreacion">
    <div class="notification is-danger">
        <?php echo traducir("trabajo_creacion_pdf")?>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("correo_electronico") ?>
        </label>
        <div class="control">
            <input name="correoCreacion" class="input" type="email" placeholder="<?php echo traducir("placeholder_correo_electronico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label">
            <?php echo traducir("confirmar_correo_electronico") ?>
        </label>
        <div class="control">
            <input name="confirmarCorreoCreacion" class="input" type="email" placeholder="<?php echo traducir("placeholder_confirmar_correo_electronico"); ?>">
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("elegir_tecnologia") ?></label>
        <div class="control">
            <div class="select">
                <select name="tecnologiaCreacion">
                    <option value="any"><?php echo traducir("tecnologia_any") ?></option>
                    <option value="angular"><?php echo traducir("tecnologia_angular_typescript") ?></option>
                    <option value="arduino">Arduino</option>
                    <option value="c">C / ANSI C</option>
                    <option value="csharp">C#</option>
                    <option value="cpp">C++ o CPP</option>
                    <option value="java">Java</option>
                    <option value="javascript"><?php echo traducir("tecnologia_javascript") ?></option>
                    <option value="javascript_backend"><?php echo traducir("tecnologia_javascript_backend") ?></option>
                    <option value="go">Golang / Go</option>
                    <option value="mysql">MySQL</option>
                    <option value="php">PHP</option>
                    <option value="postgresql">PostgreSQL</option>
                    <option value="sqlite3">SQLite3</option>
                    <option value="python">Python</option>
                    <option value="vue"><?php echo traducir("tecnologia_vue") ?></option>
                </select>
            </div>
        </div>
    </div>
    <div class="field">
        <label class="label"><?php echo traducir("mensaje") ?></label>
        <div class="control">
            <textarea name="mensajeCreacion" class="textarea" placeholder="<?php echo traducir("mensaje") ?>"></textarea>
        </div>
    </div>
    <div class="notification is-success">
        <?php echo traducir("nota_subir_pdf") ?>
    </div>
    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input name="terminosCreacion" type="checkbox">
                <?php echo traducir("trabajo_creacion_acepta_terminos") ?>
            </label>
        </div>
    </div>
</div>