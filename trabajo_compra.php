<div id="detallesCompra">
    <p class="is-size-4"><?php echo traducir("trabajo_compra_header") ?></p>
    <ol>
        <?php for ($x = 1; $x <= 7; $x++) { ?>
            <li><?php echo traducir("trabajo_compra_punto_$x"); ?></li>
        <?php } ?>
    </ol>
</div>