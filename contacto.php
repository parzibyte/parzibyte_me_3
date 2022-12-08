<section class="hero" id="contacto">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title">
                    <?php echo traducir("Contacto"); ?>
                </p>
                <p class="subtitle">
                    <?php echo traducir("Encantado de ayudarte"); ?>
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="column is-one-third">
            </div>
            <div class="column">
                <form action="correo.php" method="post" id="formContacto">
                    <div class="field">
                        <label class="label"><?php echo traducir("¿Cómo puedo ayudarte?") ?></label>
                        <div class="control">
                            <div class="select">
                                <select name="tipoTrabajo" id="selectTipoTrabajo">
                                    <option value="consultoria"><?php echo traducir("Consultoría y ayuda") ?></option>
                                    <option value="tarea"><?php echo traducir("Tarea o proyecto escolar") ?></option>
                                    <option value="modificacion"><?php echo traducir("Modificación de software creado por Parzibyte") ?></option>
                                    <option value="creacion"><?php echo traducir("Creación de software") ?></option>
                                    <option value="compra"><?php echo traducir("Compra de plugin, software por licencia o código fuente") ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="detallesConsultoria" class="notification is-success">Consultoría</div>
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
                                        <option value="any">El que Parzibyte prefiera</option>
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
                    <div id="detallesModificacion">
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
                    <div id="detallesCreacion">
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
                                        <option value="any">El que Parzibyte prefiera</option>
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
                    <div id="detallesCompra" class="notification is-success">Compra</div>
                    <div id="pieFormulario">
                        <div class="field">
                            <div class="g-recaptcha" data-sitekey="6LcQh0UUAAAAAGxeWVi1VubbM2z1GmEZeWJXH0x0">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button class="button is-link"><?php echo traducir("Enviar") ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>