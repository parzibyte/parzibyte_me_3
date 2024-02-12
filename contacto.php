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
                <p class="title"> <?php echo traducir("a_tus_ordenes"); ?> </p>
                <p class="subtitle"> <?php echo traducir("mi_correo_y_telegram"); ?> </p>
                <a class="button is-info is-rounded" href="https://t.me/parzibyte"> <?php echo traducir("telegram"); ?> </a>
                <button id="btnCorreo" class="button is-warning is-rounded"> <?php echo traducir("copiar_correo"); ?> </button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const $btnCorreo = document.querySelector("#btnCorreo");
            $btnCorreo.addEventListener("click", async () => {
                const original = $btnCorreo.textContent;
                await navigator.clipboard.writeText(["e", "t", "y", "b", "i", "z", "r", "a", "p"].reverse().join("") + "@gmail.com");
                $btnCorreo.textContent = "<?php echo traducir("copiado"); ?>";
                setTimeout(() => {
                    $btnCorreo.textContent = original;
                }, 500);
            });
        });
    </script>
</section>