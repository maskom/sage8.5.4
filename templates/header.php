<header class="banner" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'container_class' => 'collapse navbar-collapse nav-container',
                    'container_id'  => 'navbarSupportedContent',
                    'menu_id' => 'main-nav',
                    'menu_class' => 'navbar-nav mr-auto',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker' => new bs4navwalker()
                ]);
            endif;
            ?>

        </div>
    </nav>
</header>
