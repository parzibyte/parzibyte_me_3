<section class="hero" id="portafolio">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title">
                    <?php echo traducir("portafolio"); ?>
                </p>
                <p class="subtitle">
                    <?php echo traducir("permiteme_mostrar_portafolio"); ?>
                </p>
            </div>
        </div>
        <div class="columns" style="padding:10px; background-color:#fafafa;">
            <div id="slider">
                <?php
                foreach ($fotosPortafolio as $foto) {
                ?>
                    <div>
                        <img src="<?php echo $foto["imagen"]; ?>" alt="">
                        <p class="is-size-4 has-text-centered"><a target="blank" href="<?php echo $foto["enlace"]; ?>">
                                <?php echo traducir("ver"); ?>
                            </a>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <p>
                    <?php echo traducir("mira_proyectos_open_source") ?>
                    <a href="https://github.com/parzibyte?tab=repositories&q=&type=public&language=">https://github.com/parzibyte?tab=repositories&q=&type=public&language=</a>
                </p>
                <p>
                    <?php echo traducir("visita_blog") ?>
                    <a href="https://parzibyte.me/blog">https://parzibyte.me/blog</a>
                </p>

            </div>
        </div>
    </div>
</section>