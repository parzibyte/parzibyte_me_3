<nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://parzibyte.me">
                <img src="./images/logo.svg" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="#"><?php echo traducir("inicio"); ?></a>
                <a class="navbar-item" href="#servicios"><?php echo traducir("servicios"); ?></a>
                <a class="navbar-item" href="#portafolio"><?php echo traducir("portafolio"); ?></a>
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="#contacto">
                            <strong>
                                <?php echo traducir("contacto"); ?>
                            </strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>