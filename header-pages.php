<nav class="navbar navbar-expand-lg navbar-light py-3 navbar-shrink" id="mainNav">
    <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="#page-top">PoeticFlowerX </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navbar-nav ms-auto my-2 my-lg-0',
                'container' => false,

            ) );
        ?>
    </div>
</nav>