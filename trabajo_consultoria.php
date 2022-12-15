<div id="detallesConsultoria">
    <div class="notification is-success">
        <strong><?php echo traducir("trabajo_consultoria_header") ?></strong>
    </div>
    <ol>
        <?php for ($x = 1; $x <= 5; $x++) { ?>
            <li><?php echo traducir("trabajo_consultoria_punto_$x"); ?></li>
        <?php } ?>

    </ol>
    <br>
    <div class="notification is-info">
        <p><?php echo traducir("descripcion_costo_videollamada") ?></p>
    </div>
    <label for="minutos"><?php echo traducir("elegir_tiempo_videollamada") ?></label>
    <br>
    <input style="cursor: pointer; width: 100%;" value="5" type="range" id="minutos" min="5" max="120" step="5">
    <div class="notification is-warning">
        <?php echo traducir("especificacion_costo") ?>
    </div>
    <br>
    <ol>
        <?php for ($x = 1; $x <= 3; $x++) { ?>
            <li>
                <?php echo traducir("trabajo_consultoria_condicion_$x") ?>
            </li>
        <?php } ?>
    </ol>
    <strong><?php echo traducir("trabajo_consultoria_usuario_acepta") ?></strong>
</div>